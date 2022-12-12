<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sandwich;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SandwichController extends Controller
{
    //
    public function index()
    {
        $sandwiches = DB::table('sandwich')->get();
        return view('sandwich.sandwich', ['sandwiches'=>$sandwiches]);
    }

    public function store(Request $request)
    {
        $sandwiches = new Sandwich;
        $sandwiches->snack = $request->input('beverage');
        $sandwiches->quantity = $request->input('quantity');
        $sandwiches->save();

        return redirect('sandwich.sandwich')->with('Success');

    }
}
