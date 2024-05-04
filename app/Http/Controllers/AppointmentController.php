<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use App\Models\Doctor;
use App\Models\Patient;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Appointments = Appointment::get();
        return view('Appointments.index', ['Appointments' => $Appointments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Appointments.create', ['Appointment' => new Appointment(), 'Doctors'=> Doctor::get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAppointmentRequest $request)
    {
        $fields = $request->validate([
            'Tipo_Cita' => 'required|string',
            'Fecha' => 'required|string',
            'Nombre_Paciente' => 'required|string',
            'Prioridad' => 'required|integer',
            'Lugar_Cita' => 'required|string',
            'IdDoctor' => 'required|integer'
        ]);
        Appointment::create($fields);
        return redirect()->route('Appointments.create')->with('success', 'La cita ha sido agregada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $Appointment)
    {
        $Appointment = $Appointment->load('Doctors');
        return view('Appointments.show', ['Appointment'=> $Appointment]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appointment $Appointment)
    {
        return view('Appointments.edit', ['Appointment' => $Appointment, 'Doctors'=> Doctor::get()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAppointmentRequest $request, Appointment $Appointment)
    {
        $fields = $request->validate([
            'Tipo_Cita' => 'required|string',
            'Fecha' => 'required|string',
            'Nombre_Paciente' => 'required|string',
            'Prioridad' => 'required|integer',
            'Lugar_Cita' => 'required|string',
            'IdDoctor' => 'required|integer'
        ]);
        $Appointment->update($fields);
        return redirect()->route('Appointments.edit', $Appointment)->with('success', 'La Cita ha sido midificada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appointment $Appointment)
    {
        $Appointment->delete();
        return redirect()->route('Appointments.index');
    }
}
