<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AgroController extends Controller
{
   public function index(){
    return view('agrodealer');
   }

   public function store(Request $request){
    $validatedData =$request->validate([
        'name'=> 'required|string|max:255',
        'physicaladdress'=> 'required|string|max:255',
        'phonenumber' => 'required|integer|max:10',
        'email' => 'required|email|unique:agrodealer',
        'dealersin' =>'required|string|max:255',
        'service' => 'required|in:input,output,both',
        'yearsofexperience'=> 'required|integer|min:0',
        'regnumber'=> 'required|string|max:255',
        'dateof_reg' => 'required|date',
    ]);

       $agro= new Agro();
        $agro->name= $validatedData['name'];
        $agro->physicaladdress= $validatedData['physicaladdress'];
        $agro->phonenumber= $validatedData['phonenumber'];
        $agro->email= $validatedData['email'];
        $agro->dealersin= $validatedData['dealersin'];
        $agro->service= $validatedData['service'];
        $agro->yearsofexperience= $validatedData['yearsofexperience'];
        $agro->regnumber= $validatedData['regnumber'];
        $agro->dateof_reg= $validatedData['dateof_reg'];

        $agro->save();
        Farmer::create($validatedData);
        return redirect()->route('home')->with('success', 'Created successfully');

}
}
