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
                Route::post('set_track', 'store');
                Route::post('/tracking-code/update/{id}', 'update')->name('tracking-code.update');

                Route::get('/tracking/states/{country}', 'getStatesByCountry')->name('tracking.states');

            });
        });
    });
});

// Route::get('/tracking/states/{country}', [TrackingController::class, 'getStatesByCountry'])->name('tracking.states');

Route::get('migrate', function () {
    try {
        Artisan::call('migrate');
        Artisan::call('g:c');
        Artisan::call('g:s all');

        return "Migrations have been executed successfully.";
    } catch (\Throwable $th) {
        return $th->getMessage();
    }
});

// Auth::routes();
Route::get('migrates', function () {
    try {
        Artisan::call('migrate');
        sleep(2);
        Artisan::call('db:seed', [
            '--class' => 'UserSeeder',
        ]);
        sleep(3);
        Artisan::call('g:c');
        Artisan::call('g:s Nigeria');
        sleep(1);
        return "Migrations have been executed successfully.";
    } catch (\Throwable $th) {
        return $th->getMessage();
    }
});

Route::get('seedadmin', function () {
    try {
        Artisan::call('db:seed', [
            '--class' => 'UserSeeder',
        ]);

        return "Admin seeded successfully!";
    } catch (\Throwable $th) {
        return $th->getMessage();
    }
});
// for migrating db
Route::get('migratecountry', function () {
    try {
        Artisan::call('g:c');
        Artisan::call('g:s Nigeria');

        return "Migrations have been executed successfully.";
    } catch (\Throwable $th) {
        return $th->getMessage();
    }
});
