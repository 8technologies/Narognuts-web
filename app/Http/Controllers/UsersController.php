<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
       //return view('users.index')->with('users', $users);
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
    { $this->validate($request,[
        'FirstName' => ['required', 'string', 'max:255'],
        'MiddleName' => ['string', 'max:255'],
        'LastName' => ['required', 'string', 'max:255'],
        'Sex' => ['required', 'string', 'max:255'],
        'PhoneNumber' => ['required', 'string', 'max:255'],
        'UserName' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
        
    ]);

    $user = new User();
    $user->FirstName = $request->input('FirstName');
    $user->MiddleName = $request->input('MiddleName');
    $user->LastName = $request->input('LastName');
    $user->Sex = $request->input('Sex');
    $user->PhoneNumber = $request->input('PhoneNumber');
    $user->UserName = $request->input('UserName');
    $user->email = $request->input('email');
    $user->password = $request->input('password');
    $res = $user->save();
   

    //return redirect('/dashboard')->with('success', 'Submitted Successfully');
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
