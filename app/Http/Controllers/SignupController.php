<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Signup',
            'active' => 'signup'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required','min:3','max:255','unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        // $validatedData['password'] = Hash::make($validatedData['password']);


        User::create($validatedData);
        // $request->session()->flash('success', 'Resgistration successfull! Please login');
        return redirect('/login');
    }
}
