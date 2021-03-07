<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customers;
use App\Services;
use App\Intrests;


class CustomersController extends Controller
{
    public function index(){
        $services = services::all();
        $intrest = intrests::all();
        return view('index',compact('services','intrest'));
        // return view('index');
    }

    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|min:4',
            'mobile' => 'required',
            'email' => 'required|email',
        ]);

        $var = new Customers;
        $var->name = $request->input('name');
        $var->mobile = $request->input('mobile');
        $var->email = $request->input('email');
        // $var->save();
        return response()->json($var->save(),200);
        // return back()->with('success', 'Customer created successfully.');
    }
}
