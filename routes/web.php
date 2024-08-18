<?php

use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\SupportServiceController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Frontend\BlogController;
use Illuminate\Support\Facades\Route;
use App\Models\Service;
use App\Models\PricePlan;
use App\Models\Project;
use App\Models\ServiceInfo;


Route::get('/', function () {
    return view('frontend.pages.home');
});

Route::view('/about', 'frontend.pages.static_pages.about');
Route::view('/contact', 'frontend.pages.static_pages.contact');
Route::view('/project', 'frontend.pages.static_pages.project');
Route::view('/service', 'frontend.pages.static_pages.service');
Route::get('/category/{slug}', [InformationController::class, 'categoryservice']);
Route::view('/pricing', 'frontend.pages.static_pages.pricing');
Route::view('/privacy-policy', 'frontend.pages.static_pages.privacy_policy');
Route::view('/terms-condition', 'frontend.pages.static_pages.terms_condition');
Route::view('/faq', 'frontend.pages.static_pages.faq');

Route::post('support-service', [SupportServiceController::class, 'SupportService'])->name('support.service');

Route::post('contact-now', [InformationController::class, 'contact'])->name('contact.store');
Route::get('/search', [InformationController::class, 'search']);

Route::get('give/react/{slug}', [InformationController::class, 'givereact']);


// Blog
Route::get('/blog', [BlogController::class, 'index']);
// Route::get('/blog/comment/show', [BlogController::class, 'blogCommentShow'])->name('blog.comment.show');
Route::get('/blogs/{slug}', [BlogController::class, 'blogDetails'])->name('single.blog');
Route::post('/blogs/comments', [BlogController::class, 'blogComments'])->name('blog.comments');


// Service Details
Route::get('/details/{id}', function ($id) {
    $service_detail        = Service::where('id', $id)->first();
    $pricePlan_details     = PricePlan::where('service_id', $id)->get();
    $project_details       = Project::where('service_id', $id)->get();
    $meterials             = ServiceInfo::where('service_id', $id)->where('type', 'material')->get();
    $procedures            = ServiceInfo::where('service_id', $id)->where('type', 'procedure')->get();
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
