<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmer;
class FarmerController extends Controller
{
    public function index(){
        return view('farmer');
    }
    public function store(Request $request){
        $validatedData =$request->validate([
            'firstname'=> 'required|string|max:255',
            'middlename'=> 'required|string|max:255',
            'lastname'=> 'required|string|max:255',
            'email' => 'required|email|unique:farmer',
            'dob' => 'required|date',
            'phonenumber' => 'required|integer|max:10',
            'sex' => 'required|in:male,female',
            'subcounty' =>'required|string|max:255',
            'parish' =>'required|string|max:255',
            'village' =>'required|string|max:255',
            'farmersassociation' => 'required|string|max:255',
            'experience'=> 'required|integer|min:0',
            'scale'=> 'required|integer|min:0',
            'dependants'=>'required|integer|min:0'
        ]);

        //Create a new farmer
       /* $farmer= new Farmer();
        $farmer->firstname= $validatedData['firstname'];
        $farmer->middlename= $validatedData['middlename'];
        $farmer->lastname= $validatedData['lastname'];
        $farmer->email= $validatedData['email'];
        $farmer->dob= $validatedData['dob'];
        $farmer->sex= $validatedData['sex'];
        $farmer->subcounty= $validatedData['subcounty'];
        $farmer->parish= $validatedData['parish'];
        $farmer->village= $validatedData['village'];
        $farmer->farmersassociation =$validatedData['farmersassociation'];
        $farmer->experience= $validatedData['experience'];
        $farmer->scale =$validatedData['scale'];
        $farmer->dependants=$validatedData['dependants'];

        $farmer->save();*/
        Farmer::create($validatedData);
        return redirect()->route('home')->with('success', 'Created successfully');
    }
}
