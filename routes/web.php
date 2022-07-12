<?php

use App\Http\Controllers\backend\CardTrialController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\BackendController;
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
//     return view('frontend.index');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.index');
    })->name('dashboard');
});



//Frontend
Route::get('/',[VController::class,'index'])->name('sps.index');
Route::get('/contact',[CardController::class,'index'])->name('sps.contact');


//Backend
//Admin Logout
Route::get('/admin/logout',[BackendController::class,'Logout'])->name('admin.logout');
Route::get('/admin/login/view',[BackendController::class,'LoginView'])->name('admin.login');


//Manage Vehicle

Route::get('/all/vehicles',[BackendController::class,'AllVehicle'])->name('all.vehicles');
Route::get('/add/vehicle',[BackendController::class,'AddVehicle'])->name('add.vehicle');
Route::post('/store/vehicle',[BackendController::class,'StoreVehicle'])->name('store.vehicle');
Route::get('/edit/vehicle/{id}',[BackendController::class,"EditVehicle"])->name('edit.vehicle');
Route::post('/update/vehicle/{id}',[BackendController::class,"UpdateVehicle"])->name('update.vehicle');
Route::get('/delete/vehicle/{id}',[BackendController::class,'DestroyVehicle'])->name('delete.vehicle');

//Manage Card
Route::get('/all/cards',[BackendController::class,'AllCard'])->name('all.card');
Route::get('/add/card',[BackendController::class,'AddCard'])->name('add.card');
Route::post('/store/card',[BackendController::class,'StoreCard'])->name('store.card');
Route::get('/edit/card/{vehicle_id}',[BackendController::class,"EditCard"])->name('edit.card');
Route::post('/update/card/{vehicle_id}',[BackendController::class,"UpdateCard"])->name('update.card');
Route::get('/delete/card/{vehicle_id}',[BackendController::class,'DeleteCard'])->name('delete.card');


//Tap Up Card
Route::get('/tap/all/cards',[BackendController::class,'TapAllCard'])->name('tap.all.card');
Route::get('/tap/add/card/{id}',[BackendController::class,'TapAddCard'])->name('tap.add.card');
Route::post('/tap/store/card/{id}',[BackendController::class,'TapStoreCard'])->name('tap.store.card');


//Manage Payment
Route::get('/all/payments',[PaymentController::class,'AllPayment'])->name('all.payment');
Route::get('/add/payment',[PaymentController::class,'AddPayment'])->name('add.payment');
Route::post('/store/payment',[PaymentController::class,'StorePayment'])->name('store.payment');
//Route::post('/store/payment',[PaymentController::class,'StorePayment'])->name('store.payment');
//Route::post('/store/payment',[PaymentController::class,'StorePayment'])->name('store.payment');





