<?php

use App\Http\Controllers\bookingcontroller;
use App\Http\Controllers\contact;
use App\Http\Controllers\contentcontoller;
use App\Http\Controllers\doctorcontoller;
use App\Http\Controllers\Doctorcontroller;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\usercontrol;

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//      return view('welcome');

// });
// Route::get('/Home',[usercontrol::class,'index']);
// Route::get('/',[MajorController::class,'index']);
// Route::delete('/deletmajor{id}',[MajorController::class,'delet'])->name('delet');
// Route::get('/major{id}',[MajorController::class,'edite'])->name('edite');
// Route::post('/major{id}',[MajorController::class,'post'])->name('update');
// Route::get('/create',[MajorController::class,'create'])->name('create');
// Route::post('/create',[MajorController::class,'create2'])->name('story');

Route::get('/A',[MajorController::class,'indexp'])->name('major.index');
Route::get('/A{id}',[MajorController::class,'show'])->name('major.show');
Route::get('/AE{id}',[MajorController::class,'indexe'])->name('edite');
Route::put('/AU{id}',[MajorController::class,'indexu'])->name('major.updat');
Route::get('/Acreate',[MajorController::class,'createu'])->name('storyu');
Route::post('/Acreate',[MajorController::class,'createu2'])->name('storyu2');
//doctor
// Route::get('/doctor',[doctorcontoller::class,'index'])->name('doctor.index');
// Route::get('/doctor{id}',[doctorcontoller::class,'edite'])->name('editedoc');
// Route::put('/doctoru/ee{id}',[doctorcontoller::class,'update'])->name('doctorup');
// Route::get('/doctorcreate/fff/',[doctorcontoller::class,'createdocu'])->name('storydocu');
// Route::post('/doctorstory',[doctorcontoller::class,'story'])->name('storyu2');



Route::get('/',[contact::class,'index'])->name('Contact.index');
Route::get('/Contact{id}',[contact::class,'edite'])->name('rr');
Route::put('/Contact{id}',[contact::class,'update'])->name('Contactusup');

Route::get('/contact',[contact::class,'createdocu'])->name('storycon');
Route::post('/contactstory',[contact::class,'story'])->name('storyu2');

//booking
Route::get('/booking',[bookingcontroller::class,'index'])->name('booking.index');
Route::get('/booking{id}',[bookingcontroller::class,'edite'])->name('booking.edite');
Route::put('/booking{id}',[bookingcontroller::class,'update'])->name('booking.update');
Route::delete('/deletbooking{id}',[bookingcontroller::class,'delet'])->name('booking.delet');

Route::resource('doctor',Doctorcontroller::class);

// bookingup
