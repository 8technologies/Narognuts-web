<?php

namespace App\Http\Controllers;

use App\Models\multiplierRecord;
use Illuminate\Http\Request;

class multiplierRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('registeringUsers.multiplierRecords');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('registeringUsers.multiplierRecords');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // return ('value posted');
        $this->validate($request,[
            'FirstName' => ['required', 'string', 'max:255'],
            'MiddleName' => ['max:255'],
            'LastName' => ['required', 'string', 'max:255'],
            'Sex' => ['required', 'string', 'max:255'],
            'PhoneNumber' => ['required', 'string', 'max:255', 'unique:multiplier_records'],
            'EnterpriseName' => ['required', 'string', 'max:255'],
            'DistrictOfOperation' => ['required', 'string', 'max:255'],
            'DateOfRegistration' => ['required', 'string', 'max:255'],
            'RegistrationNumber' => ['required', 'string', 'max:255'],
            'SectorOfSpecialisation' => ['required', 'string', 'max:255'],
            
        ]);

        $multiplierRecord = new multiplierRecord();
        $multiplierRecord->FirstName = $request->input('FirstName');
        $multiplierRecord->MiddleName = $request->input('MiddleName');
        $multiplierRecord->LastName = $request->input('LastName');
        $multiplierRecord->Sex = $request->input('Sex');
        $multiplierRecord->PhoneNumber = $request->input('PhoneNumber');
        $multiplierRecord->EnterpriseName = $request->input('EnterpriseName');
        $multiplierRecord->DistrictOfOperation = $request->input('DistrictOfOperation');
        $multiplierRecord->DateOfRegistration = $request->input('DateOfRegistration');
        $multiplierRecord->RegistrationNumber = $request->input('RegistrationNumber');
        $multiplierRecord->SectorOfSpecialisation = $request->input('SectorOfSpecialisation');
        $res = $multiplierRecord->save();

        if($res){
            return back()->with('successs', 'You have registered successfully');
        }else{
           return back()->with('fail','something is wrong');
        }
       
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
