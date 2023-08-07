<?php

namespace App\Http\Controllers;

use App\Models\preOrder;
use Illuminate\Http\Request;

class preOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('MarketPlace.preOrder');
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
            'CropVariety' => ['required', 'string', 'max:255'],
            'Type' => ['required', 'string', 'max:255'],
            'offerType' => ['required', 'string', 'max:255'],
            'collectionDate' => ['required', 'string', 'max:255'],
            'Location' => ['required', 'string', 'max:255',],
            'Details' => ['required', 'string', 'max:255'],
        ]);

        $preOrder = new preOrder();
        $preOrder->CropVariety = $request->input('CropVariety');
        $preOrder->Quantity = $request->input('Quantity');
        $preOrder->Unit = $request->input('Unit');
        $preOrder->collectionDate= $request->input('collectionDate');
        $preOrder->Location = $request->input('Location');
        $preOrder->collectionDate = $request->input('collectionDate');
        $preOrder->Remarks = $request->input('Details');
        $res = $preOrder->save();
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
