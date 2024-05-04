<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Patient;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Patients = Patient::get();
        return view('Patients.index', ['Patients' => $Patients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Patients.create', ['Patient' => new Patient(), 'Appointments'=> Appointment::get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePatientRequest $request)
    {
        $fields = $request->validate([
            'Nombre' => 'required|string',
            'Apellido' => 'required|string',
            'Correo' => 'required|string',
            'Telefono' => 'required|integer',
            'Direccion' => 'required|string',
            'IdCita' => 'required|integer'
        ]);
        Patient::create($fields);
        return redirect()->route('Patients.create')->with('success', 'El Paciente ha sido agregado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $Patient)
    {
        $Patient = $Patient->load('Appointments');
        return view('Patients.show', ['Patient'=> $Patient]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $Patient)
    {
        return view('Patients.edit', ['Patient' => $Patient, 'Appointments'=> Appointment::get()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePatientRequest $request, Patient $Patient)
    {
        $fields = $request->validate([
            'Nombre' => 'required|string',
            'Apellido' => 'required|string',
            'Correo' => 'required|string',
            'Telefono' => 'required|integer',
            'Direccion' => 'required|string',
            'IdCita' => 'required|integer'
        ]);
        $Patient->update($fields);
        return redirect()->route('Patients.edit', $Patient)->with('success', 'El Paciente ha sido midificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $Patient)
    {
        $Patient->delete();
        return redirect()->route('Patients.index');
    }
}
