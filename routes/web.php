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

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::get('/logout', 'HomeController@logout')->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Role routes
Route::get('/roles', 'RoleController@index')->name('roles');

Route::post('/roles', 'RoleController@create')->name('roles.create');

Route::post('/roles/update', 'RoleController@update')->name('roles.update');

Route::post('/roles/delete', 'RoleController@delete')->name('roles.delete');


// Category routes
Route::get('/categories', 'CategoryController@index')->name('categories');

Route::post('/categories', 'CategoryController@create')->name('categories.create');

Route::post('/categories/update', 'CategoryController@update')->name('categories.update');

Route::post('/categories/delete', 'CategoryController@delete')->name('categories.delete');


// User routes
Route::get('/users', 'UserController@index')->name('users');

Route::post('/users', 'UserController@create')->name('users.create');

Route::post('/users/update', 'UserController@update')->name('users.update');

Route::post('/users/delete', 'UserController@delete')->name('users.delete');

Route::get('/user/{id}/profile', 'HomeController@profile')->name('profile');

// Patient routes
Route::get('/patients', 'PatientController@index')->name('patients');

Route::post('/patients', 'PatientController@create')->name('patients.create');

Route::post('/patients/update', 'PatientController@update')->name('patients.update');

Route::post('/patients/delete', 'PatientController@delete')->name('patients.delete');

// Appointment routes
Route::get('/appointments', 'AppointmentController@index')->name('appointments');

Route::post('/appointments', 'AppointmentController@create')->name('appointments.create');

Route::post('/appointments/update', 'AppointmentController@update')->name('appointments.update');

Route::post('/appointments/delete', 'AppointmentController@delete')->name('appointments.delete');

// Bed routes
Route::get('/beds', 'BedController@index')->name('beds');

Route::post('/beds', 'BedController@create')->name('beds.create');

Route::post('/beds/update', 'BedController@update')->name('beds.update');

Route::post('/beds/delete', 'BedController@delete')->name('beds.delete');

// Bed Allotment routes
Route::get('/bed_allotments', 'BedAllotmentController@index')->name('bed_allotments');

Route::post('/bed_allotments', 'BedAllotmentController@create')->name('bed_allotments.create');

Route::post('/bed_allotments/update', 'BedAllotmentController@update')->name('bed_allotments.update');

Route::post('/bed_allotments/delete', 'BedAllotmentController@delete')->name('bed_allotments.delete');

// Blood Group routes
Route::get('/blood_groups', 'BloodGroupController@index')->name('blood_groups');

Route::post('/blood_groups', 'BloodGroupController@create')->name('blood_groups.create');

Route::post('/blood_groups/update', 'BloodGroupController@update')->name('blood_groups.update');

Route::post('/blood_groups/delete', 'BloodGroupController@delete')->name('blood_groups.delete');

// Medicine Category routes
Route::get('/medicine-categories', 'MedicineCategoryController@index')->name('medicine-categories');

Route::post('/medicine-categories', 'MedicineCategoryController@create')->name('medicine-categories.create');

Route::post('/medicine-categories/update', 'MedicineCategoryController@update')->name('medicine-categories.update');

Route::post('/medicine-categories/delete', 'MedicineCategoryController@delete')->name('medicine-categories.delete');

// Medicine routes
Route::get('/medicines', 'MedicineController@index')->name('medicines');

Route::post('/medicines', 'MedicineController@create')->name('medicines.create');

Route::post('/medicines/update', 'MedicineController@update')->name('medicines.update');

Route::post('/medicines/delete', 'MedicineController@delete')->name('medicines.delete');

// Blood Donor routes
Route::get('/blood-donors', 'BloodDonorController@index')->name('blood-donors');

Route::post('/blood-donors', 'BloodDonorController@create')->name('blood-donors.create');

Route::post('/blood-donors/update', 'BloodDonorController@update')->name('blood-donors.update');

Route::post('/blood-donors/delete', 'BloodDonorController@delete')->name('blood-donors.delete');

// Payment routes
Route::get('/payments', 'PaymentController@index')->name('payments');

Route::post('/payments', 'PaymentController@create')->name('payments.create');

Route::post('/payments/update', 'PaymentController@update')->name('payments.update');

Route::post('/payments/delete', 'PaymentController@delete')->name('payments.delete');

// Prescription routes
Route::get('/prescriptions', 'PrescriptionController@index')->name('prescriptions');

Route::post('/prescriptions', 'PrescriptionController@create')->name('prescriptions.create');

Route::post('/prescriptions/update', 'PrescriptionController@update')->name('prescriptions.update');

Route::post('/prescriptions/delete', 'PrescriptionController@delete')->name('prescriptions.delete');


// Report routes
Route::get('/reports', 'ReportController@index')->name('reports');

Route::post('/reports', 'ReportController@create')->name('reports.create');

Route::post('/reports/update', 'ReportController@update')->name('reports.update');

Route::post('/reports/delete', 'ReportController@delete')->name('reports.delete');


// Invoice routes
Route::get('/invoices', 'InvoiceController@index')->name('invoices');

Route::post('/invoices', 'InvoiceController@create')->name('invoices.create');

Route::post('/invoices/update', 'InvoiceController@update')->name('invoices.update');

Route::post('/invoices/delete', 'InvoiceController@delete')->name('invoices.delete');
