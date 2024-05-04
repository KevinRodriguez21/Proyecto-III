<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Http\Requests\StoreDoctorRequest;
use App\Http\Requests\UpdateDoctorRequest;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Doctors = Doctor::get();
        return view('Doctors.index', ['Doctors' => $Doctors]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Doctors.create', ['Doctor' => new Doctor()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDoctorRequest $request)
    {
        $fields = $request->validate([
            'Nombre' => 'required|string',
            'Apellido' => 'required|string',
            'Especialidad' => 'required|string',
            'Telefono' => 'required|integer'
        ]);
        Doctor::create($fields);
        return redirect()->route('Doctors.create')->with('success', 'El Doctor ha sido agregado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $Doctor)
    {
        return view('Doctors.show', ['Doctor'=> $Doctor]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $Doctor)
    {
        return view('Doctors.edit', ['Doctor' => $Doctor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDoctorRequest $request, Doctor $Doctor)
    {
        $fields = $request->validate([
            'Nombre' => 'required|string',
            'Apellido' => 'required|string',
            'Especialidad' => 'required|string',
            'Telefono' => 'required|integer'
        ]);
        $Doctor->update($fields);
        return redirect()->route('Doctors.edit', $Doctor)->with('success', 'El Doctor ha sido midificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $Doctor)
    {
        $Doctor->delete();
        return redirect()->route('Doctors.index');
    }
}
