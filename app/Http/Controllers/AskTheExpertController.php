<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asktheexpert;

class AskTheExpertController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('AskTheExpert.asktheexpert');
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
        // dd($request->all());
        // return ('value posted');
         $this->validate($request,[
             'Question' => ['required', 'string', 'max:255'],
             'file_path' => ['required|mimes:jpg,png,jpeg|max:5048'],
         ]);
         $newImageName = time().'-'.'.'.$request->image->extension();
        $request->image->move(public_path('images'),$newImageName);
         // dd($test);
 
         $asktheexpert = new Asktheexpert();
         $asktheexpert->Question = $request->input('Question');
         $asktheexpert->file_path =$newImageName;
         $res = $asktheexpert->save();
 
         // if($res){
         //     return back()->with('successs', 'You havw registered successfully');
         // }else{
         //    return back()->with('fail','something is wrong');
         // }
        return redirect('/asktheexpert')->with('success', 'Submitted Successfully');
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
