<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class User extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('inscrir');
        //
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
        $request->validate([

            "fistname"=>'required|string|max:255',
            "lastname"=>'required|string|max:255',
            "email"=>'required|string|email|max:255|unique:users',
            "password"=>[
                'required',
                'string',
                'confirmed',
                'min:8',
                'regex:/[A-Z]/','regex:/[a-z]/','regex:/[0-9]/','regex:[_!@#$%&*()<>?]/',],[
                    "password.regex"=>"ggjkggt"
            ]

        ]);
        User::create(
            [
              'name'=>$request->fistname,
              'name'=>$request->lastname,
              'email'=>$request->email,
              'password'=>Hash::make($request->password),
            ]
            );
            return back()->with('success','vous avez creé un compte');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
