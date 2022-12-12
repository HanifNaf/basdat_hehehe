<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SandwichDetail;

class SandwichDetailController extends Controller
{
    //
    public function index()
    {
        return view('sandwich.sandwich_details');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'sandwich' => "required",
            'bread' => "required",
            'size' => 'required',
            'extras' => 'required',
            'veggies' => 'required',
            'sauces' => 'required',
            
        ]);

        SandwichDetail::create($validatedData);
        
        return redirect('/sandwich_detail');
    }
}
