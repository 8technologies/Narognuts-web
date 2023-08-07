<?php

namespace App\Http\Controllers;

use App\Models\FarmerRecord;
use App\Models\User;
use Illuminate\Http\Request;

class farmerRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $farmer_records = FarmerRecord::all();
       return view('farmerRecords.index')->with('farmer_records', $farmer_records);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('farmerRecords.farmerRecords');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // return ('value posted');
        $this->validate($request,[
            'FirstName' => ['required', 'string', 'max:255'],
            'MiddleName' => [ 'max:255'],
            'LastName' => ['required', 'string', 'max:255'],
            'Sex' => ['required', 'string', 'max:255'],
            'PhoneNumber' => ['required', 'string', 'max:255', 'unique:farmer_records'],
            'SubCounty' => ['required', 'string', 'max:255'],
            'Village' => ['required', 'string', 'max:255'],
            'Association' => ['required', 'string', 'max:255'],
            'ProductionScale' => ['required', 'string', 'max:255'],
            'NumberOfDependants' => ['required', 'string', 'max:255'],
            'LevelOfEducation' => ['required', 'string', 'max:255'],
            
        ]);

        $farmerRecord = new farmerRecord();
        $farmerRecord->FirstName = $request->input('FirstName');
        $farmerRecord->MiddleName = $request->input('MiddleName');
        $farmerRecord->LastName = $request->input('LastName');
        $farmerRecord->Sex = $request->input('Sex');
        $farmerRecord->PhoneNumber = $request->input('PhoneNumber');
        $farmerRecord->SubCounty = $request->input('SubCounty');
        $farmerRecord->Village = $request->input('Village');
        $farmerRecord->Association = $request->input('Association');
        $farmerRecord->ProductionScale = $request->input('ProductionScale');
        $farmerRecord->NumberOfDependants = $request->input('NumberOfDependants');
        $farmerRecord->LevelOfEducation = $request->input('LevelOfEducation');
        $res = $farmerRecord->save();

        if($res){
            return back()->with('successs', 'You havw registered successfully');
        }else{
           return back()->with('fail','something is wrong');
        }
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
        $users = User::find($id);
       return view('farmerRecords.farmerRecords')->with('users', $users); 
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
         $this->validate($request,[
            'FirstName' => ['required', 'string', 'max:255'],
            'MiddleName' => [ 'max:255'],
            'LastName' => ['required', 'string', 'max:255'],
            'Sex' => ['required', 'string', 'max:255'],
            'PhoneNumber' => ['required', 'string', 'max:255', 'unique:farmer_records'],
            'SubCounty' => ['required', 'string', 'max:255'],
            'Village' => ['required', 'string', 'max:255'],
            'Association' => ['required', 'string', 'max:255'],
            'ProductionScale' => ['required', 'string', 'max:255'],
            'NumberOfDependants' => ['required', 'string', 'max:255'],
            'LevelOfEducation' => ['required', 'string', 'max:255'],
            
        ]);

        $farmerRecord = new farmerRecord();
        $farmerRecord->FirstName = $request->input('FirstName');
        $farmerRecord->MiddleName = $request->input('MiddleName');
        $farmerRecord->LastName = $request->input('LastName');
        $farmerRecord->Sex = $request->input('Sex');
        $farmerRecord->PhoneNumber = $request->input('PhoneNumber');
        $farmerRecord->SubCounty = $request->input('SubCounty');
        $farmerRecord->Village = $request->input('Village');
        $farmerRecord->Association = $request->input('Association');
        $farmerRecord->ProductionScale = $request->input('ProductionScale');
        $farmerRecord->NumberOfDependants = $request->input('NumberOfDependants');
        $farmerRecord->LevelOfEducation = $request->input('LevelOfEducation');
        $res = $farmerRecord->save();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $farmer_records = FarmerRecord::find($id);
        $farmer_records->delete();
        return redirect('/farmerRecordsindex')->with('success', 'updated Successfully');
    }
}
