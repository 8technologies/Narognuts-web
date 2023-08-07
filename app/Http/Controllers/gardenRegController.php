<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GardenReg;

class gardenRegController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $garden_regs = GardenReg::all();
       return view('gardenReg.index')->with('garden_regs', $garden_regs);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gardenReg.gardenReg');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // return ('value posted');
        $this->validate($request,[
            'GardenName' => ['required', 'string', 'max:255'],
            'GardenSize' => ['required', 'string', 'max:255'],
            'PlatingDate' => ['required', 'string', 'max:255'],
            'varietyPlanted' => ['required', 'string', 'max:255'],
            'SeedClass' => ['required', 'string', 'max:255'],
            'seedBoughtFrom' => ['required', 'string', 'max:255'],
            'OwnershipOfLand' => ['required', 'string', 'max:255'],
            'NameOfSeller' => ['required', 'string', 'max:255'],
            'SellerLocation' => ['required', 'string', 'max:255'],
            'SellerContactNumber' => ['required', 'string', 'max:255'],
            'PurposeOfPlanting' => ['required', 'string', 'max:255'],
            
        ]);

        $gardenReg = new gardenReg();
        $gardenReg->GardenName = $request->input('GardenName');
        $gardenReg->GardenSize = $request->input('GardenSize');
        $gardenReg->PlatingDate = $request->input('PlatingDate');
        $gardenReg->varietyPlanted = $request->input('varietyPlanted');
        $gardenReg->SeedClass = $request->input('SeedClass');
        $gardenReg->seedBoughtFrom = $request->input('seedBoughtFrom');
        $gardenReg->OwnershipOfLand = $request->input('OwnershipOfLand');
        $gardenReg->NameOfSeller = $request->input('NameOfSeller');
        $gardenReg->SellerLocation = $request->input('SellerLocation');
        $gardenReg->SellerContactNumber = $request->input('SellerContactNumber');
        $gardenReg->PurposeOfPlanting = $request->input('PurposeOfPlanting');
        $res = $gardenReg->save();

        return redirect('/gardenRegCreate')->with('success', 'Submitted Successfully');

        // if($res){
        //     return back()->with('successs', 'You have registered successfully');
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
        $garden_regs = GardenReg::find($id);
        return view('gardenReg.edit')->with('garden_regs', $garden_regs);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'GardenName' => ['required', 'string', 'max:255'],
            'GardenSize' => ['required', 'string', 'max:255'],
            'PlatingDate' => ['required', 'string', 'max:255'],
            'varietyPlanted' => ['required', 'string', 'max:255'],
            'SeedClass' => ['required', 'string', 'max:255'],
            'seedBoughtFrom' => ['required', 'string', 'max:255'],
            'OwnershipOfLand' => ['required', 'string', 'max:255'],
            'NameOfSeller' => ['required', 'string', 'max:255'],
            'SellerLocation' => ['required', 'string', 'max:255'],
            'SellerContactNumber' => ['required', 'string', 'max:255'],
            'PurposeOfPlanting' => ['required', 'string', 'max:255'],
            
        ]);

        $gardenReg = gardenReg::find($id);
        $gardenReg->GardenName = $request->input('GardenName');
        $gardenReg->GardenSize = $request->input('GardenSize');
        $gardenReg->PlatingDate = $request->input('PlatingDate');
        $gardenReg->varietyPlanted = $request->input('varietyPlanted');
        $gardenReg->SeedClass = $request->input('SeedClass');
        $gardenReg->seedBoughtFrom = $request->input('seedBoughtFrom');
        $gardenReg->OwnershipOfLand = $request->input('OwnershipOfLand');
        $gardenReg->NameOfSeller = $request->input('NameOfSeller');
        $gardenReg->SellerLocation = $request->input('SellerLocation');
        $gardenReg->SellerContactNumber = $request->input('SellerContactNumber');
        $gardenReg->PurposeOfPlanting = $request->input('PurposeOfPlanting');
        $res = $gardenReg->save();

        return redirect('/gardenRegCreate')->with('success', 'updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $garden_regs = GardenReg::find($id);
        $garden_regs->delete();
        return redirect('/gardenReg')->with('success', 'updated Successfully');
    }
}
