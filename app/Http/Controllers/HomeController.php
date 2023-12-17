<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $totalPendaftar = Student::count();
        $totalMahasiswa = Student::where('status', 1)->count();
        $totalUser = User::count();

        return view('admin.home', compact('totalPendaftar', 'totalMahasiswa', 'totalUser'));
    }
}
