<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gardenReg;

class gardenRegController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('FarmManagement.gardenReg');
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
            'GardenName' => ['required', 'string', 'max:255'],
            'GardenSize' => ['required', 'string', 'max:255'],
            'PlatingDate' => ['required', 'string', 'max:255'],
            'varietyPlanted' => ['required', 'string', 'max:255'],
            'SeedClass' => ['required', 'string', 'max:255', 'unique:multiplier_records'],
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
