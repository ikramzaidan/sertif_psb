<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.users.index', [
            'users' => User::all(),
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
        $studentId = $request->student_id;

        $update = Student::where('id', $studentId)->update(['status' => 1]);

        if($update) {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make('password'),
                'role' => 'User'
            ]);
        }

        return redirect()->route('students.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        if($request->file('photo')) {
            $photo = explode('.', $request->file('photo')->getClientOriginalName())[0];
            $photo = $photo . '-' . time() . '.' . $request->file('photo')->extension();
            $request->file('photo')->storeAs('public/uploads/', $photo);
            $validatedData['photo'] = $photo;
        }

        User::where('id', $user->id)->update($validatedData);

        if($user->role != 'Admin') {
            Student::where('email', $user->email)->update(['name' => $request->name]);
        }

        return redirect()->route('users.index')->with('success', 'Profil berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        User::where('id', $user->id)->delete();

        return redirect('/users')->with('success', 'User berhasil dihapus!');
    }

    public function profile()
    {
        $user = auth()->user();

        return view('admin.profile.edit', compact('user'));
    }

    public function profile_update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        if($request->file('photo')) {
            $photo = explode('.', $request->file('photo')->getClientOriginalName())[0];
            $photo = $photo . '-' . time() . '.' . $request->file('photo')->extension();
            $request->file('photo')->storeAs('public/uploads/', $photo);
            $validatedData['photo'] = $photo;
        }

        User::where('id', auth()->user()->id)->update($validatedData);

        if(auth()->user()->role != 'Admin') {
            Student::where('email', auth()->user()->email)->update(['name' => $request->name]);
        }

        return redirect('/profile')->with('success', 'Profil berhasil disimpan!');
    }

    public function profile_print()
    {
        $user = auth()->user();

        $pdf = Pdf::loadView('print', ['student' => $user->student]);
     
        return $pdf->stream();
    }
}
