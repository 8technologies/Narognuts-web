<?php

namespace App\Http\Controllers;

use App\Models\SeedSeller;
use Illuminate\Http\Request;

class seedSellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('MarketPlace.seedSeller');
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
            'Name' => ['required', 'string', 'max:255'],
            'Quantity' => ['required', 'string', 'max:255'],
            'Unit' => ['required', 'string', 'max:255'],
            'Price_Per_Unit' => ['required', 'string', 'max:255',],
            'PaymentMode' => ['required', 'string', 'max:255'],
            'Remarks' => ['required', 'string', 'max:255'],
            'image_path' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);
        $newImageName = time().'-'.'.'.$request->image->extension();
        dd($newImageName);

        $SeedSeller = new SeedSeller();
        $SeedSeller->Name = $request->input('Name');
        $SeedSeller->Quantity = $request->input('Quantity');
        $SeedSeller->Unit = $request->input('Unit');
        $SeedSeller->Price_Per_Unit = $request->input('Price_Per_Unit');
        $SeedSeller->PaymentMode = $request->input('PaymentMode');
        $SeedSeller->Remarks = $request->input('Remarks');
        $res = $SeedSeller->save();

        // if($res){
        //     return back()->with('successs', 'You havw registered successfully');
        // }else{
        //    return back()->with('fail','something is wrong');
        // }
       
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
