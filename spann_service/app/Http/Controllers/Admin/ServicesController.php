<?php

namespace App\Http\Controllers\Admin;

use App\Actions\UploadFileAction;
use App\Http\Controllers\Controller;
use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ServicesController extends Controller
{
    public function index()
    {
        return Inertia::render('Services/Index', [
            'services' => ServiceResource::collection(Service::simplePaginate(5))
        ]);
    }

    public function create()
    {
        return Inertia::render('Services/Create', [
            'edit' => false,
            'service' => new ServiceResource(new Service())
        ]);
    }

    public function store(Request $request, UploadFileAction $uploadFile)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'description' => 'required|string',
            'description_ru' => 'required|string',
            'image' => 'required|image|max:500',
        ]);

        $data['image'] = $uploadFile->setFile($request->file('image'))
            ->setUploadPath((new Service())->uploadFolder())
            ->execute();

        Service::create($data);

        return redirect()->route('services.index')
            ->with('success', 'Service saved succesfully.');
    }

    public function edit(Service $service)
    {
        return Inertia::render('Services/Create', [
            'edit' => true,
            'service' => new ServiceResource($service)
        ]);
    }

    public function update(Request $request, Service $service, UploadFileAction $uploadFile)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'description' => 'required|string',
            'description_ru' => 'required|string',
            'image' => 'nullable|image|max:500',
        ]);

        // If there is an old image
        $data['image'] = $service->image;

        if ($request->file('image')) {
            $service->deleteImage();

            $data['image'] = $uploadFile->setFile($request->file('image'))
                ->setUploadPath($service->uploadFolder())
                ->execute();
        }

        $service->update($data);

        return redirect()->route('services.index')
            ->with('success', 'Service updated succesfully.');
    }

    public function destroy(Service $service)
    {
        $service->deleteImage();
        
        $service->delete();

        return redirect()->route('services.index')
            ->with('success', 'Service deleted succesfully.');
    }
}
