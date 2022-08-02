<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\SingleBlogController;
use App\Http\Controllers\User\ServiceController;
use App\Http\Controllers\User\ProjectController;
use App\Http\Controllers\User\GalleryController;
use App\Http\Controllers\User\ContactController;
use App\Http\Controllers\User\BlogController;
use App\Http\Controllers\User\AboutController;
use App\Http\Controllers\User\TeamController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\User\EstimentController;
use App\Http\Controllers\User\BathroomController;
use App\Http\Controllers\User\BedroomController;
use App\Http\Controllers\User\LivingroomController;
use App\Http\Controllers\User\ModularkitchenController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home', function () {
//     return view('User.index');
// });
Route::get('/',[HomeController::class,'show']);

Route::get('/home',[HomeController::class,'index']);
// route::get('/redirects',[HomeController::class,"index"]);

route::get('/signin',[LoginController::class,'index']);
route::get('/about',[AboutController::class, 'index']);

route::get('/blog',[BlogController::class,'index']);
route::get('/contact',[ContactController::class,'index']);
//  route::get('/',[GalleryController::class,'index']);
route::get('/project',[ProjectController::class,'index']);
route::get('/service',[ServiceController::class,'index']);
route::get('/single-blog',[SingleBlogController::class,'index']);
route::get('/team',[TeamController::class,'index']);
route::get('/Bathroom',[BathroomController::class,'index']);
route::get('/Bedroom',[BedroomController::class,'index']);
route::get('/Modularkitchen',[ModularkitchenController::class,'index']);
route::get('/Livingroom',[LivingroomController::class,'index']);
route::get('/estimate',[EstimentController::class, 'index']);
Route::get('/admin_page', function () {
    return view('Admin/index');
});
// Route::get('/banner', function () {
//     return view('Admin/banner/index');
// });
//Route::resource('banner', 'App\Http\Controllers\admin\BannerController');
//banner
Route::get('/banner', [BannerController::class,'index'])->name('bannerlist');
Route::get('/banner/create',[BannerController::class,'create'])->name('CreateBanner');
Route::get('/banner/edit',[BannerController::class,'edit'])->name('bannerEdit');
Route::delete('/banner/delete/{id}', [BannerController::class,'destroy'])->name('BannerDelete');
Route::POST('/banner/store', [BannerController::class,'store'])->name('StoreBanner');
Route::get('/banner/show', [BannerController::class,'show'])->name('ShowBanner');
Route::POST('/banner/update', [BannerController::class,'update'])->name('bannerUpdate');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
