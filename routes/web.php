<?php

use Illuminate\Support\Facades\Route;

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
//about rooute page

Route::view('/home', 'Home_Page')->name('home-page');
Route::view('/Partners', 'Partners_in_Success')->name('Partners');
Route::view('/About', 'About_US')->name('About');

// add iniative route page
Route::view('/admin-home', 'DOV_Home')->name('dovhome');
Route::view('dov-mail', 'DOV_Mail')->name('dovmail');
Route::view('Add_Institution', 'Add_Institution')->name('Add_Institution');
Route::view('Announcments', 'Announcments')->name('Announcments');
Route::view('Add_Admin', 'Add_Admin_ar')->name('Add_Admin_ar');
Route::view('Add__initative', 'Add__initative_ar')->name('Add__initative');

// add student route
Route::view('Student_Home', 'Student_Home')->name('Student_Home');
Route::view('Application_Std', 'Application_Std_page_ar')->name('Application_Std');
Route::view('Suggest_initative', 'Suggest_initative_ar')->name('Suggest_initative');
Route::view('Student_mail', 'Student_mail_ar')->name('Student_mail');

// add instuation route page

Route::view('Institution_Home', 'Institution_Home')->name('Institution_Home');
Route::view('Finish_Volunteering', 'Finish_Volunteering')->name('Finish_Volunteering');
Route::view('institution_mail', 'institution_mail_ar')->name('institution_mail');

Route::get('/', function () {
    return view('Finish_Volunteering');
});
