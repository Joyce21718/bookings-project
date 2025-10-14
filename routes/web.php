<?php

use App\Http\Controllers\Admin\CustomerController as AdminCustomerController;
use App\Http\Controllers\Admin\ApartmentController;
use App\Http\Controllers\Admin\DashboardadminA;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Dashboardadmin;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FeaturedController;
use App\Http\Controllers\Generatereports;
use App\Http\Controllers\Managebooking;
use App\Http\Controllers\Managepayment;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\users\dashboard;
use App\Http\Controllers\users\DashboardprofileController;
use App\Http\Controllers\users\MybookingController;
use Illuminate\Support\Facades\Route;

// ================================================================================================
// Homepage Routes
// ================================================================================================
Route::get('/', [FeaturedController::class, 'index'])->name('home');
Route::get('/all_apartment', [FeatureController::class, 'index'])->name('all_apartment');
Route::view('/about', 'homepages.about')->name('about');
Route::view('/contact', 'homepages.contact')->name('contact');
Route::view('/customlogin', 'homepages.customlogin')->name('customlogin');
Route::view('/customregister', 'homepages.customregister')->name('customregister');

// Book Now
Route::get('/booknow/{id}', [BookingController::class, 'create'])->name('booknow.create');
Route::post('/booknow', [BookingController::class, 'store'])->name('booknow.store');
Route::view('/booknow', 'homepages.booknow')->name('booknow');

Route::get('/apartments', [FeatureController::class, 'index'])->name('apartments.index');

// ================================================================================================
// Frontend Customer Registration & Login
// ================================================================================================
// Route::post('/customer.register', [CustomerController::class, 'register'])->name('customer.register');
Route::post('/customlogin', [CustomerController::class, 'login'])->name('customer.login');

// ================================================================================================
// Admin Panel Routes
// ================================================================================================
Route::prefix('dashboard')->group(function () {
    Route::get('/admin-dashboard', [Dashboardadmin::class, 'index'])->name('admin-dashboard');
    Route::get('/admin-dashboard', [DashboardadminA::class, 'index'])->name('admin-dashboard');
    Route::get('/manageusers', [AdminCustomerController::class, 'index'])->name('manageusers');

    Route::get('/manageapartments', [ApartmentController::class, 'index'])->name('manageapartments');
    Route::get('/managebooking', [Managebooking::class, 'index'])->name('managebooking');
    Route::get('/managepayment', [Managepayment::class, 'index'])->name('managepayment');
    Route::get('/generatereports', [Generatereports::class, 'index'])->name('generatereports');
});

Route::prefix('admin')->name('admin.')->group(function () {

    Route::controller(ApartmentController::class)->group(function () {
        // Customers
        Route::get('/manage-customers', 'index')->name('customers.index');
        Route::get('/create-customer', 'create')->name('customers.create');
        Route::post('/register-customer', 'register')->name('customers.register');
        Route::delete('/delete-customer/{customer}', 'destroy')->name('customers.destroy');

        // Apartments
        Route::get('/manage-apartments', [ApartmentController::class, 'index'])->name('apartments.index');
        Route::post('/apartments/store', [ApartmentController::class, 'store'])->name('apartments.store');
        Route::delete('/apartments/{id}', [ApartmentController::class, 'destroy'])->name('apartments.destroy');
    });
    // Bookings
    Route::controller(BookingController::class)->group(function () {

        Route::get('/admin/bookings', 'index')->name('admin.bookings');
        Route::get('/bookings', 'index')->name('bookings.index');
        Route::get('/bookings/{booking}/edit', 'edit')->name('bookings.edit');
        Route::put('/bookings/{booking}', 'update')->name('bookings.update');
        Route::delete('/bookings/{booking}', 'destroy')->name('bookings.destroy');
        Route::delete('/bookings/{id}/cancel', 'cancel')->name('bookings.cancel');


        Route::get('/admin/bookings', 'index')->name('admin.bookings');
        Route::get('/bookings',  'index')->name('bookings.index');
        Route::get('/bookings/{booking}/edit',  'edit')->name('bookings.edit');
        Route::put('/bookings/{booking}',  'update')->name('bookings.update');
        Route::delete('/bookings/{booking}',  'destroy')->name('bookings.destroy');
        Route::delete('/bookings/{id}/cancel',  'cancel')->name('bookings.cancel');
    });
});

// ================================================================================================
// Default & Dashboard
// ================================================================================================
Route::get('/default', function () {
    return redirect()->route('admin.apartments.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ================================================================================================
// Users Panel Routes
// ================================================================================================


Route::prefix('dashboard')->group(function () {

    Route::get('/user.dashboard', [dashboard::class, 'index'])->name('user.dashboard');
    Route::get('/mybookings', [MybookingController::class, 'index'])->name('mybookings');
    Route::get('/dashboardprofile', [DashboardprofileController::class, 'index'])->name('dashboardprofile');
    Route::put('/mybookings/{id}/cancel', [MybookingController::class, 'cancel'])
        ->name('user.bookings.cancel');
});

// ===============================================================================================f=
// Profile Routes
// ================================================================================================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
