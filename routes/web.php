<?php

use App\Http\Controllers\IndexCntroller;
use Illuminate\Http\Client\Request;
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

Route::get('/', [IndexCntroller::class,'index'])->name('index');

Route::get('/about', [IndexCntroller::class,'about'])->name('about');


Route::get('/cont/{names}', [IndexCntroller::class, 'contact'])->name('contact');
// Route::get('/cont/{names}', function ($names) {
   
//     return view('contact' ,['name'=>$names,'age'=>10]);
// })->name('contact');


//route prefix
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return 'Admin homwe';
    });

    Route::get('/settings', function () {
        return 'Admin settings';
    });
});

// register
Route::get('/register', [IndexCntroller::class,'register'])->name('register');

Route::post('/register', [IndexCntroller::class,'reg'])->name('reg');


// login
Route::get('/login', [IndexCntroller::class, 'login'])->name('login');

Route::post('/login', [IndexCntroller::class,'getLogin'])->name('getLogin');
