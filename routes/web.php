<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DiogramController;
use App\Http\Controllers\ExcurtionController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\VideoController;
use App\Models\Slider;
use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('admin');
});
Route::get('/slider', function () {
    return view('adminSlider',['data'=>Slider::all()]);
});
Route::get('/slider/{id}', [SliderController::class, 'edit'])->name('sliderid');
Route::post('/slider/{id}/update', [SliderController::class, 'formedit'])->name('slideridup');
Route::get('/slider/{id}/delete', [SliderController::class,'deleteForm'])->name('deleteslider');



Route::get('/anim', function () {
    return view('adminAnim');
});
Route::get('/excurtion', function () {
    return view('adminExcurtion');
});
Route::get('/galery', function () {
    return view('adminGalery');
});
Route::get('/video', function () {
    return view('adminVideo');
});
Route::get('/news', function () {
    return view('adminNews');
});
Route::get('/company', function () {
    return view('adminCompany');
});
Route::get('/diogram', function () {
    return view('adminDiogram');
});



Route::get('/', function () {
    return view('main');
});
Route::get('/incubation', function () {
    return view('incub');
});
Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
  Route::post('/admin1', [AnimeController::class, 'anim'])->name('anim');

  Route::post('/adminh', [SliderController::class, 'form'])->name('form');


  Route::post('/admin2', [ExcurtionController::class, 'excurtion'])->name('excurtion');

  Route::post('/admin3', [GaleryController::class, 'galery'])->name('galery');

  Route::post('/admin5', [VideoController::class, 'video'])->name('video');

  Route::post('/admin4', [NewsController::class, 'news'])->name('news');

  Route::post('/admin6', [CompanyController::class, 'company'])->name('company');

  Route::post('/admin7', [DiogramController::class, 'diogram'])->name('diogram');




require __DIR__.'/auth.php';
