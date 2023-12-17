<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Student;
use App\Models\District;
use App\Models\Province;
use App\Models\Religion;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.students.index', [
            'students' => Student::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('admin.students.edit', [
            'student' => $student,
            'provinces' => Province::all(),
            'regencies' => City::all(),
            'districts' => District::all(),
            'religions' => Religion::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address_by_idc' => 'required',
            'address' => 'required',
            'province' => 'required',
            'regency' => 'required',
            'district' => 'required',
            'birth_date' => 'required',
            'birth_place' => 'required',
            'gender' => 'required',
            'citizenship' => 'required',
            'nationality' => 'required',
            'marriage_status' => 'required',
            'religion' => 'required',
        ]);

        Student::where('id', $student->id)->update($validatedData);

        return redirect('/students')->with('success', 'Edit mahasiswa berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        Student::where('id', $student->id)->delete();

        return redirect('/students')->with('success', 'Mahasiswa berhasil dihapus!');
    }
}
