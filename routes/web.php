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
use App\Http\Controllers\ViewController;
use App\Models\Anim;
use App\Models\Cat;
use App\Models\Company;
use App\Models\Contact;
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
    return view('adminContact',['data'=>Contact::all()]);
});
Route::get('/clients/{id}/delete',[ContactController::class, 'delete'])->name('delete');


Route::get('/mp/slider', function () {
    return view('adminSlider',['data'=>Slider::all()]);
});
Route::get('/mp/slider/{id}', [SliderController::class, 'edit'])->name('sliderid');
Route::post('/mp/slider/{id}/update', [SliderController::class, 'formedit'])->name('slideridup');
Route::get('/mp/slider/{id}/delete', [SliderController::class,'deleteForm'])->name('deleteslider');



Route::get('/mp/anim', function () {
    return view('adminAnim',['data'=>Anim::all()]);
});
Route::get('/mp/anim/{id}', [AnimeController::class, 'edit'])->name('animid');
Route::post('/mp/anim/{id}/update', [AnimeController::class, 'animedit'])->name('animidup');
Route::get('/mp/anim/{id}/delete', [AnimeController::class,'deleteAnim'])->name('deleteanim');


Route::get('/mp/excurtion', function () {
    return view('adminExcurtion',['data'=>Excurtion::all()]);
});
Route::get('/mp/excurtion/{id}', [ExcurtionController::class, 'exedit'])->name('excurtionid');
Route::post('/mp/excurtion/{id}/update', [ExcurtionController::class, 'excurtionedit'])->name('excurtionup');
Route::get('/mp/excurtion/{id}/delete', [ExcurtionController::class,'deleteExcurtion'])->name('deleteexcurtion');


/*Route::get('/galery', function () {
    return view('adminGalery', );
});*/
Route::get('/mp/galery', [GaleryController::class, 'index'])->name('galeryphonk');
Route::get('/mp/galery/{id}', [GaleryController::class, 'galedit'])->name('galeryid');
Route::post('/mp/galery/{id}/update', [GaleryController::class, 'gqedit'])->name('galeryup');
Route::get('/mp/galery/{id}/delete', [GaleryController::class,'deletephot'])->name('deleteaph');
Route::get('/mp/galery/{id}/delete1', [GaleryController::class,'deletepcat'])->name('deletecat');

Route::get('/mp/video', function () {
    return view('adminVideo',['data'=>Video::all()]);
});

Route::get('/mp/video/{id}', [VideoController::class, 'vedit'])->name('videoid');
Route::post('/mp/video/{id}/update', [VideoController::class, 'videoedit'])->name('videoup');
Route::get('/mp/video/{id}/delete', [VideoController::class,'deleteVideo'])->name('deletevideo');


Route::get('/mp/news', function () {
    return view('adminNews',['data'=>News::all()]);
});

Route::get('/mp/news/{id}', [NewsController::class, 'nedit'])->name('newsid');
Route::post('/mp/news/{id}/update', [NewsController::class, 'newsedit'])->name('newsup');
Route::get('/mp/news/{id}/delete', [NewsController::class,'deleteNews'])->name('deletenews');

Route::get('/mp/company', function () {
    return view('adminCompany',['data'=>Company::all()]);
});

Route::get('/mp/company/{id}', [CompanyController::class, 'cedit'])->name('companyid');
Route::post('/mp/company/{id}/update', [CompanyController::class, 'companyedit'])->name('companyup');
Route::get('/mp/company/{id}/delete', [CompanyController::class,'deleteCompany'])->name('deletecompany');

Route::get('/mp/diogram', function () {
    return view('adminDiogram',['data'=>Diogram::all()]);
});

Route::get('/mp/diogram/{id}', [DiogramController::class, 'dedit'])->name('diogramid');
Route::post('/mp/diogram/{id}/update', [DiogramController::class, 'diogramedit'])->name('diogramup');
Route::get('/mp/diogram/{id}/delete', [DiogramController::class,'deleteDiogram'])->name('deletediogram');


Route::get('/', function () {
    return view('main',['data'=>Slider::all(),
        'data1'=>Anim::all(),
        'data2'=>Video::all(),
        'data3'=>News::all(),
        'data4'=>Company::all(),
        'data5'=>Diogram::all(),
        'data6'=>Excurtion::all()]);
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

Route::get('/mailable', function () {
});




require __DIR__.'/auth.php';
