<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        // Logic to show the user creation form
       return view('users.create');
    }

    public function store(Request $request){
        // Validate the request data


        try {
            // $request->validate([
            //     'name' => 'required|string|max:255',
            //     'email' => 'required|email|unique:users,email',
            //     'password' => 'required|string|min:8|confirmed',
            // ]);

        User::create( [
        'name' => $request->name, 
        'email' => $request->email, 
        'password' => $request->password ] );

        // Redirect or return a response
        return redirect()->route('user.create')->with('success', 'User created successfully!');

        }catch (\Exception $e) {
            // Handle the exception, log it, or return an error response
            return back()->withInput()->with('error', 'Erro ao cadastrar usuario!');
        }
    }
}
