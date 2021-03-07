<?php

namespace App\Http\Controllers;
use App\Services;
use App\Intrests;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index (){
        $services = services::all();
        $intrest = intrests::all();
        return view('services',compact('services','intrest'));
    }
}
