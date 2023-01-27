<?php

use App\Http\Controllers\AnimeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DiogramController;
use App\Http\Controllers\ExcurtionController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\VideoController;
use App\Models\Anim;
use App\Models\Cat;
use App\Models\Company;
use App\Models\Diogram;
use App\Models\Excurtion;
use App\Models\Galery;
use App\Models\News;
use App\Models\Slider;
use App\Models\Video;
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
Route::get('/clients', function () {
    return view('adminContact');
});
Route::get('/slider', function () {
    return view('adminSlider',['data'=>Slider::all()]);
});
Route::get('/slider/{id}', [SliderController::class, 'edit'])->name('sliderid');
Route::post('/slider/{id}/update', [SliderController::class, 'formedit'])->name('slideridup');
Route::get('/slider/{id}/delete', [SliderController::class,'deleteForm'])->name('deleteslider');



Route::get('/anim', function () {
    return view('adminAnim',['data'=>Anim::all()]);
});
Route::get('/anim/{id}', [AnimeController::class, 'edit'])->name('animid');
Route::post('/anim/{id}/update', [AnimeController::class, 'animedit'])->name('animidup');
Route::get('/anim/{id}/delete', [AnimeController::class,'deleteAnim'])->name('deleteanim');


Route::get('/excurtion', function () {
    return view('adminExcurtion',['data'=>Excurtion::all()]);
});
Route::get('/excurtion/{id}', [ExcurtionController::class, 'exedit'])->name('excurtionid');
Route::post('/excurtion/{id}/update', [ExcurtionController::class, 'excurtionedit'])->name('excurtionup');
Route::get('/excurtion/{id}/delete', [ExcurtionController::class,'deleteExcurtion'])->name('deleteexcurtion');


/*Route::get('/galery', function () {
    return view('adminGalery', );
});*/
Route::get('/galery', [GaleryController::class, 'index'])->name('galeryphonk');
Route::get('/galery/{id}', [GaleryController::class, 'galedit'])->name('galeryid');
Route::post('/galery/{id}/update', [GaleryController::class, 'gqedit'])->name('galeryup');


Route::get('/video', function () {
    return view('adminVideo',['data'=>Video::all()]);
});

Route::get('/video/{id}', [VideoController::class, 'vedit'])->name('videoid');
Route::post('/video/{id}/update', [VideoController::class, 'videoedit'])->name('videoup');
Route::get('/video/{id}/delete', [VideoController::class,'deleteVideo'])->name('deletevideo');


Route::get('/news', function () {
    return view('adminNews',['data'=>News::all()]);
});

Route::get('/news/{id}', [NewsController::class, 'nedit'])->name('newsid');
Route::post('/news/{id}/update', [NewsController::class, 'newsedit'])->name('newsup');
Route::get('/news/{id}/delete', [NewsController::class,'deleteNews'])->name('deletenews');

Route::get('/company', function () {
    return view('adminCompany',['data'=>Company::all()]);
});

Route::get('/company/{id}', [CompanyController::class, 'cedit'])->name('companyid');
Route::post('/company/{id}/update', [CompanyController::class, 'companyedit'])->name('companyup');
Route::get('/company/{id}/delete', [CompanyController::class,'deleteCompany'])->name('deletecompany');

Route::get('/diogram', function () {
    return view('adminDiogram',['data'=>Diogram::all()]);
});

Route::get('/diogram/{id}', [DiogramController::class, 'dedit'])->name('diogramid');
Route::post('/diogram/{id}/update', [DiogramController::class, 'diogramedit'])->name('diogramup');
Route::get('/diogram/{id}/delete', [DiogramController::class,'deleteDiogram'])->name('deletediogram');


Route::get('/', function () {
    return view('main');
});
Route::get('/incubation', function () {
    return view('incub');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::post('/contacts/form', [ContactController::class, 'form'])->name('contactico');


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
Route::post('/admin8', [GaleryController::class, 'categorys'])->name('categorys');

  Route::post('/admin5', [VideoController::class, 'video'])->name('video');

  Route::post('/admin4', [NewsController::class, 'news'])->name('news');

  Route::post('/admin6', [CompanyController::class, 'company'])->name('company');

  Route::post('/admin7', [DiogramController::class, 'diogram'])->name('diogram');




require __DIR__.'/auth.php';
