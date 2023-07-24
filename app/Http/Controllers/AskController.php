<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AskController extends Controller
{
    public function index(){
        return view('askexpert');
    }
}
