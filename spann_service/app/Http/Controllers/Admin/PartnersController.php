<?php

namespace App\Http\Controllers\Admin;

use App\Actions\UploadFileAction;
use App\Http\Controllers\Controller;
use App\Http\Resources\PartnerResource;
use App\Models\Partner;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PartnersController extends Controller
{
    public function index()
    {
        return Inertia::render('Partners/Index', [
            'partners' => PartnerResource::collection(Partner::simplePaginate(5))
        ]);
    }

    public function create()
    {
        return Inertia::render('Partners/Create', [
            'edit' => false,
            'partner' => new PartnerResource(new Partner())
        ]);
    }

    public function store(Request $request, UploadFileAction $uploadFile)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|max:50',
        ]);

        $data['image'] = $uploadFile->setFile($request->file('image'))
            ->setUploadPath((new Partner())->uploadFolder())
            ->execute();

        Partner::create($data);

        return redirect()->route('partners.index')
            ->with('success', 'Partner saved succesfully.');
    }

    public function edit(Partner $partner)
    {
        return Inertia::render('Partners/Create', [
            'edit' => true,
            'partner' => new PartnerResource($partner)
        ]);
    }

    public function update(Request $request, Partner $partner, UploadFileAction $uploadFile)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|max:50',
        ]);

        // If there is an old image
        $data['image'] = $partner->image;

        if ($request->file('image')) {
            $partner->deleteImage();

            $data['image'] = $uploadFile->setFile($request->file('image'))
                ->setUploadPath($partner->uploadFolder())
                ->execute();
        }

        $partner->update($data);

        return redirect()->route('partners.index')
            ->with('success', 'Partner updated succesfully.');
    }

    public function destroy(Partner $partner)
    {
        $partner->deleteImage();
        
        $partner->delete();

        return redirect()->route('partners.index')
            ->with('success', 'Partner deleted succesfully.');
    }
}
