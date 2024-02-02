<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{SummernoteController, TinymceController};
use App\Http\Controllers\{SweetalertController, ToastrController};
use App\Http\Controllers\{SwiperController};
use App\Http\Controllers\{MetismenuController};
use App\Http\Controllers\{LozadController};
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
//summernote
Route::controller(SummernoteController::class)->prefix('summernote')->as('summernote.')->group(function(){
    Route::get('create', 'create');
    Route::post('store', 'store')->name('store');
});
//tinymce
Route::controller(TinymceController::class)->prefix('tinymce')->as('tinymce.')->group(function(){
    Route::get('create', 'create');
    Route::post('store', 'store')->name('store');
});
//sweetalert
Route::controller(SweetalertController::class)->prefix('sweetalert')->as('sweetalert.')->group(function(){
    Route::get('sweetalert', 'sweetalert');

    Route::get('sweetalert-users', 'index');
    Route::get('sweetalert-users/{id}', 'destroy')->name('destroy');
});
//toastr
Route::controller(ToastrController::class)->prefix('toastr')->as('toastr.')->group(function(){
    Route::get('toastr', 'toastr');
    Route::get('toastr-notification', 'toastrNotification');
});
//swiper
Route::controller(SwiperController::class)->prefix('swiper')->as('swiper.')->group(function(){
    Route::get('/', 'index');
});
//metismenu
Route::controller(MetismenuController::class)->prefix('metismenu')->as('metismenu.')->group(function(){
    Route::get('/', 'index');
});
//lozad
Route::controller(LozadController::class)->prefix('lozad')->as('lozad.')->group(function(){
    Route::get('/', 'index');
});
//storyboards {bootstrap-sass, gulp, laravel-elixir, laravel-elixir-vue-2, laravel-elixir-webpack-official, vue-resource, mailshake-node}
//dh {chart.js, datatables.net, datatables.net-dt, echarts}
//cognisap {bootstrap-icons}
//martialartszen {@fortawesome/fontawesome-free, @popperjs/core, axios, bootstrap, cropperjs, datatables.net-bs5, intersection-observer, jquery-slimscroll, lodash, lozad, popper.js, select2.0, vue, vue-template-compiler}
//crm-paletre {@tailwindcss/forms, alpinejs, autoprefixer, postcss, tailwindcss}
//mht {postcss, postcss-import, resolve-url-loader, sass, sass-loader, vue-loader, cropperjs, jquery-slimscroll, vue-template-compiler}
