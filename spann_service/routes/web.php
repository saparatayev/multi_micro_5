<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MainSlidesController;
use App\Http\Controllers\Admin\DoubleSlidesController;
use App\Http\Controllers\Admin\FeedbackSlidesController;
use App\Http\Controllers\Admin\PartnersController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\SettingsController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth', 'verified'])
    ->prefix('dashboard')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('settings', [SettingsController::class, 'create'])->name('settings.create');
        Route::post('settings/save-contacts', [SettingsController::class, 'saveContacts'])->name('settings.save-contacts');
        Route::post('settings/save-menu', [SettingsController::class, 'saveMenu'])->name('settings.save-menu');
        Route::post('settings/save-form-texts', [SettingsController::class, 'saveFormTexts'])->name('settings.save-form-texts');
        Route::post('settings/save-about-section', [SettingsController::class, 'saveAboutSection'])->name('settings.save-about-section');
        Route::post('settings/save-services-section', [SettingsController::class, 'saveServicesSection'])->name('settings.save-services-section');
        Route::post('settings/save-red-form-block-section', [SettingsController::class, 'saveRedFormBlockSection'])->name('settings.save-red-form-block-section');
        Route::post('settings/save-gallery-section', [SettingsController::class, 'saveGallerySection'])->name('settings.save-gallery-section');
        Route::post('settings/save-advantages-section', [SettingsController::class, 'saveAdvantagesSection'])->name('settings.save-advantages-section');
        Route::post('settings/save-work-section', [SettingsController::class, 'saveWorkSection'])->name('settings.save-work-section');
        Route::post('settings/save-feedback-section', [SettingsController::class, 'saveFeedbackSection'])->name('settings.save-feedback-section');
        Route::post('settings/save-partners-section', [SettingsController::class, 'savePartnersSection'])->name('settings.save-partners-section');
        Route::post('settings/save-questions-section', [SettingsController::class, 'saveQuestionsSection'])->name('settings.save-questions-section');
        Route::post('settings/save-footer-section', [SettingsController::class, 'saveFooterSection'])->name('settings.save-footer-section');
        Route::post('settings/save-admin-contacts', [SettingsController::class, 'saveAdminContacts'])->name('settings.save-admin-contacts');
        Route::post('settings/save-header', [SettingsController::class, 'saveHeader'])->name('settings.save-header');
        Route::resource('main-slides', MainSlidesController::class);
        Route::resource('feedback-slides', FeedbackSlidesController::class);
        Route::resource('double-slides', DoubleSlidesController::class);
        Route::resource('services', ServicesController::class);
        Route::resource('partners', PartnersController::class);
    });
