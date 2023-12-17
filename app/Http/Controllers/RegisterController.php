<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Student;
use App\Models\District;
use App\Models\Province;
use App\Models\Religion;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('register', [
            'provinces' => Province::all(),
            'regencies' => City::all(),
            'districts' => District::all(),
            'religions' => Religion::all(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
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

        $Student = new Student();
        $insertedId = $Student->insertGetId($validatedData);

        return redirect()->route('register.show', $insertedId)->with('success', 'Pendaftaran berhasil');
    }

    public function show($id) 
    {
        $student = Student::where('id', $id)->first();

        return view('registered', compact('student'));
    }

    public function print($id) {
        $student = Student::where('id', $id)->first();

        $pdf = Pdf::loadView('print', ['student' => $student]);
     
        return $pdf->stream();
    }
}
