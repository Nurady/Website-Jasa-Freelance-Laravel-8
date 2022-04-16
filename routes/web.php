<?php

use Illuminate\Support\Facades\Route;

// Front (Landing Page)
use App\Http\Controllers\Landing\LandingController;

// Member (Dashboard)
use App\Http\Controllers\Dashboard\MemberController;
use App\Http\Controllers\Dashboard\MyOrderController;
use App\Http\Controllers\Dashboard\ProfileController;
use App\Http\Controllers\Dashboard\RequestController;
use App\Http\Controllers\Dashboard\ServiceController;

// Route Landing
Route::get('detail_booking/{id}', [LandingController::class, 'detail_booking'])->name('landing.detail.booking');
Route::get('booking/{id}', [LandingController::class, 'booking'])->name('landing.booking');
Route::get('detail/{id}', [LandingController::class, 'detail'])->name('landing.detail');
Route::get('explorer', [LandingController::class, 'explorer'])->name('landing.explorer');
Route::resource('/', LandingController::class);

// Route Member (Dashboard)
Route::group(['prefix' => 'member', 'as' => 'member.', 'middleware' => ['auth:sanctum','verified']], 
function() {
    // dashboard
    Route::resource('dashboard', MemberController::class);

    // service
    Route::resource('service', ServiceController::class);

    // request
    Route::get('approve_request/{id}', [RequestController::class, 'approve'])->name('request.approve');
    Route::resource('request', RequestController::class);

    // my order
    Route::get('accept/order/{id}', [MyOrderController::class, 'accepted'])->name('order.accepted');
    Route::get('reject/order/{id}', [MyOrderController::class, 'rejected'])->name('order.rejected');
    Route::resource('order', MyOrderController::class);

    // profile
    Route::get('delete_photo', [ProfileController::class, 'delete'])->name('profile.photo.delete');
    Route::resource('profile', ProfileController::class);
});


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', config('jetstream.auth_session'),
//     'verified'])->group(function () { Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });