<?php

namespace App\Http\Controllers;

use App\Models\SeedSeller;
use Illuminate\Http\Request;

class SeedSellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $seed_sellers = SeedSeller::all();
        return view('seedseller.index')->with('seed_sellers', $seed_sellers);
    }
    public function marketplace(){

        $seed_sellers = SeedSeller::all();
        return view('seedseller.seedmarket')->with('seed_sellers', $seed_sellers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('seedseller.seedseller');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request->all());
       // return ('value posted');
        $this->validate($request,[
            'Name' => ['required', 'string', 'max:255'],
            'Quantity' => ['required', 'string', 'max:255'],
            'Unit' => ['required', 'string', 'max:255'],
            'Price_Per_Unit' => ['required', 'string', 'max:255',],
            'PaymentMode' => ['required', 'string', 'max:255'],
            'Remarks' => ['required', 'string', 'max:255'],
            'image_path' => ['required|mimes:jpg,png,jpeg|max:5048'],
        ]);
        $newImageName = time().'-'.'.'.$request->image->extension();
        $request->image->move(public_path('images'),$newImageName);
        // dd($test);

        $SeedSeller = new SeedSeller();
        $SeedSeller->Name = $request->input('Name');
        $SeedSeller->Quantity = $request->input('Quantity');
        $SeedSeller->Unit = $request->input('Unit');
        $SeedSeller->Price_Per_Unit = $request->input('Price_Per_Unit');
        $SeedSeller->PaymentMode = $request->input('PaymentMode');
        $SeedSeller->Remarks = $request->input('Remarks');
        $SeedSeller->image_path =$newImageName;
        $res = $SeedSeller->save();

        // if($res){
        //     return back()->with('successs', 'You havw registered successfully');
        // }else{
        //    return back()->with('fail','something is wrong');
        // }
       return redirect('seedseller')->with('success', 'Submitted Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $seed_sellers = SeedSeller::find($id);
        return view('seedseller.show')->with('seed_sellers', $seed_sellers);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $seed_sellers = SeedSeller::find($id);
        return view('seedseller.edit')->with('seed_sellers', $seed_sellers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'Name' => ['required', 'string', 'max:255'],
            'Quantity' => ['required', 'string', 'max:255'],
            'Unit' => ['required', 'string', 'max:255'],
            'Price_Per_Unit' => ['required', 'string', 'max:255',],
            'PaymentMode' => ['required', 'string', 'max:255'],
            'Remarks' => ['required', 'string', 'max:255'],
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);
        $newImageName = time().'-'.'.'.$request->image->extension();
        $request->image->move(public_path('images'),$newImageName);
        // dd($test);

        $SeedSeller = SeedSeller::find($id);
        $SeedSeller->Name = $request->input('Name');
        $SeedSeller->Quantity = $request->input('Quantity');
        $SeedSeller->Unit = $request->input('Unit');
        $SeedSeller->Price_Per_Unit = $request->input('Price_Per_Unit');
        $SeedSeller->PaymentMode = $request->input('PaymentMode');
        $SeedSeller->Remarks = $request->input('Remarks');
        $SeedSeller->image_path =$newImageName;
        $res = $SeedSeller->save();

        // if($res){
        //     return back()->with('successs', 'You havw registered successfully');
        // }else{
        //    return back()->with('fail','something is wrong');
        // }
       return redirect('seedseller')->with('success', 'Submitted Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $seed_sellers = SeedSeller::find($id);
        $seed_sellers->delete();
        return redirect('/seedseller')->with('success', 'deleted Successfully');
    }
}
