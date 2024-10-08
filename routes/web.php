<?php

use App\Http\Controllers\Backend\AboutUsController;
use App\Http\Controllers\Backend\SupportServiceController;
use App\Http\Controllers\Frontend\BlogController;
use App\Models\Solution;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ProfileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $services= Solution::where('status','Active')->get();
    return view('frontend.content.maincontent',compact('services'));
});
Route::get('all-services', [WebController::class, 'allServices']);
Route::get('interior', [WebController::class, 'interior']);
Route::get('priceing', [WebController::class, 'priceing']);
Route::get('contact-us', [WebController::class, 'contact']);
Route::get('daily-blogs', [WebController::class, 'blogs']);
Route::get('about-us', [WebController::class, 'aboutus']);
Route::get('services', [WebController::class, 'services']);
Route::get('terms-of-service', [WebController::class, 'terms']);
Route::get('privacy-policy', [WebController::class, 'privacy']);

Route::post('support-service', [SupportServiceController::class, 'SupportService'])->name('support.service');

// Blog
// Route::get('/blog', [BlogController::class, 'index']);
// Route::get('/blogs/{slug}', [BlogController::class, 'blogDetails'])->name('single.blog');
Route::post('/blogs/comments', [BlogController::class, 'blogComments'])->name('blog.comments');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route::get('/aboutUs-data', [AboutUsController::class, 'aboutData'])->name('administrator.aboutUs.data');

require __DIR__.'/auth.php';
require __DIR__.'/administrator.php';
