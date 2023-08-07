<?php

namespace App\Http\Controllers;

use App\Models\serviceSeller;
use Illuminate\Http\Request;

class serviceSellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('MarketPlace.serviceSeller');
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
            'Name' => ['string', 'max:255'],
            'Type' => ['required', 'string', 'max:255'],
            'offerType' => ['required', 'string', 'max:255'],
            'conditoins' => ['required', 'string', 'max:255'],
            'Price_Per_Unit' => ['required', 'string', 'max:255',],
            'PaymentMode' => ['required', 'string', 'max:255'],
            'Remarks' => ['required', 'string', 'max:255'],
            'image_path' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);
        $newImageName = time().'-'.'.'.$request->image->extension();
        dd($newImageName);

        $serviceSeller = new serviceSeller();
        $serviceSeller->Name = $request->input('Name');
        $serviceSeller->Quantity = $request->input('Quantity');
        $serviceSeller->Unit = $request->input('Unit');
        $serviceSeller->Price_Per_Unit = $request->input('Price_Per_Unit');
        $serviceSeller->PaymentMode = $request->input('PaymentMode');
        $serviceSeller->Remarks = $request->input('Remarks');
        $res = $serviceSeller->save();
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
