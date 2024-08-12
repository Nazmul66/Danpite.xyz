<?php

use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Service;
use App\Models\PricePlan;
use App\Models\Project;
use App\Models\Blogpage;
use App\Models\ServiceInfo;


Route::get('/', function () {
    return view('frontend.pages.home');
});

Route::view('/about', 'frontend.pages.static_pages.about');
Route::view('/contact', 'frontend.pages.static_pages.contact');
Route::view('/blog', 'frontend.pages.static_pages.blog');
Route::get('/blogs/{slug}', function ($slug) {
    $singleBlog = Blogpage::where('slug', $slug)->first();
    return view('frontend.pages.static_pages.singleBlog', compact('singleBlog'));
})->name('single.blog');
Route::view('/project', 'frontend.pages.static_pages.project');
Route::view('/service', 'frontend.pages.static_pages.service');
Route::get('/category/{slug}', [InformationController::class, 'categoryservice']);
Route::view('/pricing', 'frontend.pages.static_pages.pricing');
Route::view('/privacy-policy', 'frontend.pages.static_pages.privacy_policy');
Route::view('/terms-condition', 'frontend.pages.static_pages.terms_condition');
Route::view('/faq', 'frontend.pages.static_pages.faq');
Route::post('contact-now', [InformationController::class, 'contact'])->name('contact.store');
Route::get('/search', [InformationController::class, 'search']);

Route::get('give/react/{slug}', [InformationController::class, 'givereact']);

Route::get('/details/{id}', function ($id) {
    $service_detail          = Service::where('id', $id)->first();
    $pricePlan_details       = PricePlan::where('service_id', $id)->get();
    $project_details         = Project::where('service_id', $id)->get();
    $meterials         = ServiceInfo::where('service_id', $id)->where('type', 'material')->get();
    $procedures         = ServiceInfo::where('service_id', $id)->where('type', 'procedure')->get();
    return view('frontend.pages.details', compact('id', 'service_detail', 'pricePlan_details', 'project_details','meterials','procedures'));
})->name('service.details');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });






require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
