<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ClientController;
use App\Http\Controllers\admin\CompanyProfileController;
use App\Http\Controllers\admin\MapController;
use App\Http\Controllers\admin\MessageController;
use App\Http\Controllers\admin\NewsEventController;
use App\Http\Controllers\admin\PhotoGalleryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\RegistrationController;
use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\VideoGalleryController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
// Route::get('/', function () {
//      return view('welcome');
// });

//Frontend Routes
Route::get('/', [HomeController::class, 'index'])->name('frontend.home');

Route::get('/about', [HomeController::class, 'about'])->name('frontend.about');
Route::get('/product', [HomeController::class, 'product'])->name('frontend.product');
Route::get('/cat_product/{id}', [HomeController::class, 'catProduct'])->name('frontend.catproduct');
Route::get('/product_details/{id}', [HomeController::class, 'productDetails'])->name('frontend.product_details');
Route::get('/contact', [HomeController::class, 'contact'])->name('frontend.contact');
Route::get('/photo_gallery', [HomeController::class, 'photoGallery'])->name('frontend.photo_gallery');
Route::get('/news_&_event', [HomeController::class, 'newsEvent'])->name('frontend.news_event');
Route::get('/news_event_details/{id}', [HomeController::class, 'newsEventDetails'])->name('frontend.news_event_details');


//Backend Route
Route::group(['middleware' => 'guest'], function () {

    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::put('/change-password', [AuthController::class, 'changePassword'])->name('password.change');

    // Create user
    Route::get('/user', [RegistrationController::class, 'index'])->name('user.index');
    Route::get('/user/create', [RegistrationController::class, 'create'])->name('user.create');
    Route::post('/user', [RegistrationController::class, 'store'])->name('user.store');
    Route::get('/user/{id}/edit', [RegistrationController::class, 'edit'])->name('user.edit');
    Route::put('/user/{id}', [RegistrationController::class, 'update'])->name('user.update');
    Route::get('/user/{id}', [RegistrationController::class, 'destroy'])->name('user.destroy');

    //Slider routes
    Route::get('/sliders', [SliderController::class, 'index'])->name('sliders.index');
    Route::get('/sliders/create', [SliderController::class, 'create'])->name('sliders.create');
    Route::post('/sliders', [SliderController::class, 'store'])->name('sliders.store');
    Route::get('/sliders/{id}/edit', [SliderController::class, 'edit'])->name('sliders.edit');
    Route::put('/sliders/{id}', [SliderController::class, 'update'])->name('sliders.update');
    Route::get('/sliders/{id}', [SliderController::class, 'delete'])->name('sliders.delete');

    //Product routes
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::get('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

    //Photo Gallery routes
    Route::get('/photo-gallery', [PhotoGalleryController::class, 'index'])->name('photo-gallery.index');
    Route::get('/photo-gallery/create', [PhotoGalleryController::class, 'create'])->name('photo-gallery.create');
    Route::post('/photo-gallery', [PhotoGalleryController::class, 'store'])->name('photo-gallery.store');
    Route::get('/photo-gallery/{id}/edit', [PhotoGalleryController::class, 'edit'])->name('photo-gallery.edit');
    Route::put('/photo-gallery/{id}', [PhotoGalleryController::class, 'update'])->name('photo-gallery.update');
    Route::get('/photo-gallery/{id}', [PhotoGalleryController::class, 'destroy'])->name('photo-gallery.destroy');

    //Video Gallery routes
    Route::get('/video-gallery', [VideoGalleryController::class, 'index'])->name('video-gallery.index');
    Route::get('/video-gallery/create', [VideoGalleryController::class, 'create'])->name('video-gallery.create');
    Route::post('/video-gallery', [VideoGalleryController::class, 'store'])->name('video-gallery.store');
    Route::get('/video-gallery/{id}/edit', [VideoGalleryController::class, 'edit'])->name('video-gallery.edit');
    Route::put('/video-gallery/{id}', [VideoGalleryController::class, 'update'])->name('video-gallery.update');
    Route::get('/video-gallery/{id}', [VideoGalleryController::class, 'destroy'])->name('video-gallery.destroy');

    // Category routes
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
    Route::get('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

    // Client routes
    Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
    Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
    Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
    Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
    Route::put('/clients/{id}', [ClientController::class, 'update'])->name('clients.update');
    Route::get('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');

    // News and Events routes
    Route::get('/news-events', [NewsEventController::class, 'index'])->name('news_events.index');
    Route::get('/news-events/create', [NewsEventController::class, 'create'])->name('news_events.create');
    Route::post('/news-events', [NewsEventController::class, 'store'])->name('news_events.store');
    Route::get('/news-events/{id}/edit', [NewsEventController::class, 'edit'])->name('news_events.edit');
    Route::put('/news-events/{id}', [NewsEventController::class, 'update'])->name('news_events.update');
    Route::get('/news-events/{id}', [NewsEventController::class, 'destroy'])->name('news_events.destroy');

    //Company profile routes
    Route::get('/company-profile', [CompanyProfileController::class, 'index'])->name('company-profile.index');
    Route::put('/company-profile-update', [CompanyProfileController::class, 'update'])->name('company_profile.update');

    //Map routes
    Route::get('/map', [MapController::class, 'index'])->name('map.index');
    Route::put('/map-update/{id}', [MapController::class, 'update'])->name('map.update');

    //Message routes
    Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
    Route::post('/messages/store', [MessageController::class, 'store'])->name('messages.store');
    Route::get('/messages/{id}', [MessageController::class, 'destroy'])->name('messages.destroy');

});


