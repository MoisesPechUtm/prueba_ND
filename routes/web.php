<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\PacienteController;

Route::get('/', function () {
    return view('bienvenido');
});

//Tutores

Route::get('/listado_tutores', [TutorController::class, 'getApiListado'])->name('tutor.getApiListado');

//Hospitales

Route::get('/listado_hospitales', [HospitalController::class, 'getApiListado'])->name('hospital.getApiListado');
Route::get('/add_hospital/{id?}', [HospitalController::class, 'addHospitalView'])->name('hospital.addHospitalView');
Route::post('/add_hospital', [HospitalController::class, 'postApiAddHospital'])->name('hospital.postApiAddHospital');
Route::put('/update_hospital/{id}', [HospitalController::class, 'putApiUpdateHospital'])->name('hospital.putApiUpdateHospital');
Route::delete('/delete_hospital/{id}', [HospitalController::class, 'deleteApiEliminar'])->name('hospital.deleteApiEliminar');

// Pacientes

Route::get('/paciente/{id}/pdf', [PacienteController::class, 'generarPDF'])->name('paciente.generarPDF');


Route::get('/listado_pacientes', [PacienteController::class, 'getApiListado'])->name('paciente.getApiListado');
Route::get('/add_paciente/{id?}', [PacienteController::class, 'addPacienteView'])->name('paciente.addPacienteView');
Route::post('/add_paciente', [PacienteController::class, 'postApiAddPaciente'])->name('paciente.postApiAddPaciente');
Route::put('/update_paciente/{id}', [PacienteController::class, 'putApiUpdatePaciente'])->name('paciente.putApiUpdatePaciente');
Route::delete('/delete_paciente/{id}', [PacienteController::class, 'deleteApiEliminar'])->name('paciente.deleteApiEliminar');

