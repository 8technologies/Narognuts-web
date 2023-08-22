<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use GuzzleHttp\Promise\Create;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
       return view('users.index')->with('users', $users);
    }


public function Useraccept(string $id)
{
    $data = User::find($id);
    $data->form_status = 'Active';
    $data->save();
    return redirect()->back();

}

public function Userreject(string $id)
{
    $data = User::find($id);
    $data->form_status = 'rejected';
    $data->save();
    return redirect()->back();

}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      $permissions = Permission::all();
      return view('users.Create')->with('permissions', $permissions);

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
    $user->syncPermissions($request->Permission,[]);
    return redirect('/userindex')->with('success', 'updated Successfully');
   

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
        $user = User::find($id);
        return view('users.edit',[
            'user'=> $user,
            'userRole'=> $user->role,
            'roles'=>Role::latest()->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'FirstName' => ['required', 'string', 'max:255'],
            'MiddleName' => ['string', 'max:255'],
            'LastName' => ['required', 'string', 'max:255'],
            'Sex' => ['required', 'string', 'max:255'],
            'PhoneNumber' => ['required', 'string', 'max:255'],
            'UserName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            
        ]);
    
        $user =  User::find($id);
        $user->FirstName = $request->input('FirstName');
        $user->MiddleName = $request->input('MiddleName');
        $user->LastName = $request->input('LastName');
        $user->Sex = $request->input('Sex');
        $user->PhoneNumber = $request->input('PhoneNumber');
        $user->UserName = $request->input('UserName');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $res = $user->save();
        return redirect('/userindex')->with('success', 'updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('/userindex')->with('success', 'deleted Successfully');
    }
}
