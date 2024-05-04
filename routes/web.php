<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PatientController;

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
    return view('layout');
})->name('welcome');

Route::get('/Doctor', [DoctorController::class, 'index']) ->name('Doctors.index');
Route::get('/Doctor/create', [DoctorController::class, 'create']) ->name('Doctors.create');
Route::post('/Doctor', [DoctorController::class, 'store']) ->name('Doctors.store');
Route::get('Doctor/{Doctor}', [DoctorController::class, 'show'])->name('Doctors.show');
Route::get('/Doctor/{Doctor}/edit', [DoctorController::class, 'edit']) ->name('Doctors.edit');
Route::patch('/Doctor/{Doctor}', [DoctorController::class, 'update']) ->name('Doctors.update');
Route::delete('/Doctor/{Doctor}', [DoctorController::class, 'destroy']) ->name('Doctors.destroy');

Route::get('/Appointment', [AppointmentController::class, 'index']) ->name('Appointments.index');
Route::get('/Appointment/create', [AppointmentController::class, 'create']) ->name('Appointments.create');
Route::post('/Appointment', [AppointmentController::class, 'store']) ->name('Appointments.store');
Route::get('Appointment/{Appointment}', [AppointmentController::class, 'show'])->name('Appointments.show');
Route::get('/Appointment/{Appointment}/edit', [AppointmentController::class, 'edit']) ->name('Appointments.edit');
Route::patch('/Appointment/{Appointment}', [AppointmentController::class, 'update']) ->name('Appointments.update');
Route::delete('/Appointment/{Appointment}', [AppointmentController::class, 'destroy']) ->name('Appointments.destroy');

Route::get('/Patient', [PatientController::class, 'index']) ->name('Patients.index');
Route::get('/Patient/create', [PatientController::class, 'create']) ->name('Patients.create');
Route::post('/Patient', [PatientController::class, 'store']) ->name('Patients.store');
Route::get('Patient/{Patient}', [PatientController::class, 'show'])->name('Patients.show');
Route::get('/Patient/{Patient}/edit', [PatientController::class, 'edit']) ->name('Patients.edit');
Route::patch('/Patient/{Patient}', [PatientController::class, 'update']) ->name('Patients.update');
Route::delete('/Patient/{Patient}', [PatientController::class, 'destroy']) ->name('Patients.destroy');
