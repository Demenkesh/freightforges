<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about_us', function () {
    return view('about');
});

Route::get('contact_us', function () {
    return view('contact');
});


Route::get('track', function () {
    return view('tracking');
});
Route::get('/parcel-details', [DashboardController::class, 'getParcelDetails'])->name('parcel.details');
Route::post('/mail', [DashboardController::class, 'send']);

Route::controller(AuthController::class)->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('login', 'showLoginForm')->name('login');
        Route::post('login', 'login');
        Route::middleware(['auth'])->group(function () {
            Route::post('logout', 'logout')->name('logout');
        });

        Route::middleware(['auth'])->group(function () {
            Route::controller(DashboardController::class)->group(function () {
                // Route::get('dashboard', 'index');

                Route::get('set_track', 'getsettrack');
                Route::get('set_track/{id}', 'showHistory')->name('history.view');
                Route::post('set_track', 'store');
                Route::put('update_track/{id}', 'updates')->name('tracking.update');
                Route::post('/tracking-code/update/{id}', 'update')->name('tracking-code.update');
                Route::post('/tracking-code/updates/{id}', 'updatess')->name('tracking-code.updates');

                Route::get('/tracking/states/{country}', 'getStatesByCountry')->name('tracking.states');

                Route::get('/tracking-code/delete/{id}', 'delete')->name('tracking-code.delete');


            });
        });
    });
});


// Route::get('/tracking/states/{country}', [TrackingController::class, 'getStatesByCountry'])->name('tracking.states');

Route::get('migrate', function () {
    try {
        Artisan::call('migrate');
        // Artisan::call('g:c');
        // Artisan::call('g:s all');

        return "Migrations have been executed successfully.";
    } catch (\Throwable $th) {
        return $th->getMessage();
    }
});

