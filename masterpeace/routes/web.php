<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashhController;
use App\Http\Controllers\UserDashhController;
use App\Http\Controllers\CategoryDashController;
use App\Http\Controllers\InventoryDashController;
use App\Http\Controllers\ServicesDashController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/index', function () {
    return view('pages.index');
});

Route::get('/cartt', function () {
    return view('pages.cart');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/loginn', function () {
    return view('pages.login');
});

Route::get('/registration', function () {
    return view('pages.registration');
});


Route::get('/my-account', function () {
    return view('pages.my-account');
});

Route::get('/dash', function () {
    return view('Dash.Home');
});
Route::get('/add_user_dash', function () {
    return view('Dash.add_user_dash');
});

// .....................................................admin>>>>>>>>>>>>>>>>>>>>>>>>


Route::resource('admin', AdminDashhController::class);

Route::resource('services', ServicesDashController::class);

Route::resource('equipment', equipmentDashController::class);

Route::resource('medicine', MedicineDashController::class);

Route::get('/item', [VolnteeritemDashhhController::class, 'index'])->name('all_items');

Route::get('/detail', [VolnteerdetailDashhController::class, 'index'])->name('all_details');

Route::resource('category', CategoryDashController::class);
Route::resource('inventory', InventoryDashController::class);

Route::get('/adminlogin', [AuthenticatedSessionController::class, "create"]);

Route::resource('user', UserDashhController::class);

Route::resource('adminprofile', PhotoController::class);
