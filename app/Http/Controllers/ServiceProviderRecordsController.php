<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service_provider_records;

class ServiceProviderRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('registeringUsers.serviceProviderRecords');
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
       // return ('value posted');
        $this->validate($request,[
            'FirstName' => ['required', 'string', 'max:255'],
            'MiddleName' => ['required', 'string', 'max:255'],
            'LastName' => ['required', 'string', 'max:255'],
            'Sex' => ['required', 'string', 'max:255'],
            'PhoneNumber' => ['required', 'string', 'max:255', 'unique:multiplier_records'],
            'ServiceProvided' => ['required', 'string', 'max:255'],
            'Category' => ['required', 'string', 'max:255'],
            'YearsOfOperation' => ['required', 'string', 'max:255'],
            'DateOfRegistration' => ['required', 'string', 'max:255'],
            'RegistrationNumber' => ['required', 'string', 'max:255'],
            
        ]);

        $service_provider_records = new service_provider_records();
        $service_provider_records->FirstName = $request->input('FirstName');
        $service_provider_records->MiddleName = $request->input('MiddleName');
        $service_provider_records->LastName = $request->input('LastName');
        $service_provider_records->Sex = $request->input('Sex');
        $service_provider_records->PhoneNumber = $request->input('PhoneNumber');
        $service_provider_records->ServiceProvided = $request->input('ServiceProvided');
        $service_provider_records->Category = $request->input('Category');
        $service_provider_records->YearsOfOperation = $request->input('YearsOfOperation');
        $service_provider_records->DateOfRegistration = $request->input('DateOfRegistration');
        $service_provider_records->RegistrationNumber = $request->input('RegistrationNumber');
        $res = $service_provider_records->save();

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
