<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\FoodMachineryController;
use App\Http\Controllers\Frontend\FoodPackaging;
use App\Http\Controllers\Frontend\FoodIngredients;
use App\Http\Controllers\Frontend\FoodSafety;
use App\Http\Controllers\Frontend\ThermalProcess;


use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ProfileController;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about-us', [AboutUsController::class, 'aboutUs'])->name('about_us');

Route::get('/import-and-installation-of-food-processing-machinery', [FoodMachineryController::class, 'index'])->name('import_and_installation');
Route::get('/import-and-installation-of-food-processing-machinery/beverage-processing-industry', [FoodMachineryController::class, 'beverage'])->name('beverage');
Route::get('/import-and-installation-of-food-processing-machinery/baking-and-confectionery-industry', [FoodMachineryController::class, 'baking'])->name('baking');
Route::get('/import-and-installation-of-food-processing-machinery/fruit-and-vegetable-processing-industry', [FoodMachineryController::class, 'fruit'])->name('fruit');
Route::get('/import-and-installation-of-food-processing-machinery/dairy-industry', [FoodMachineryController::class, 'dairy'])->name('dairy');
Route::get('/import-and-installation-of-food-processing-machinery/spice-processing-industry', [FoodMachineryController::class, 'spice'])->name('spice');
Route::get('/import-and-installation-of-food-processing-machinery/fish-processing-and-canning-industry', [FoodMachineryController::class, 'fish'])->name('fish');
Route::get('/import-and-installation-of-food-processing-machinery/coconut-processing-industry', [FoodMachineryController::class, 'coconut'])->name('coconut');
Route::get('/import-and-installation-of-food-processing-machinery/steam-boilers', [FoodMachineryController::class, 'steam'])->name('steam');

Route::get('/import-food-packaging', [FoodPackaging::class, 'index'])->name('food_packaging');
Route::get('/food-ingredients', [FoodIngredients::class, 'index'])->name('food_ingredients');
Route::get('/consultancy-for-food-safety-certifications', [FoodSafety::class, 'index'])->name('food_safety');
Route::get('/thermal-process-validation', [ThermalProcess::class, 'index'])->name('thermal_process');

Route::get('contact', [ContactController::class, 'index'])->name('contact');

Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        // User Dashboard Specific
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');

        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    });
});
