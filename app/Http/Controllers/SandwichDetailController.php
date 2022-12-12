<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SandwichDetail;
use Illuminate\Support\Facades\DB;

class SandwichDetailController extends Controller
{
    //
    public function index()
    {
        $sandwiches = DB::table('sandwich')->get();
        return view('sandwich', ['sandwiches'=>$sandwiches]);
    }

    public function store(Request $request)
    {

        $sandwiches = new SandwichDetail();
        $sandwiches->bread = $request->input('bread');
        $sandwiches->size = $request->input('size')->nullable();
        $sandwiches->extras = $request->input('extras')->nullable();
        $sandwiches->veggies = $request->input('veggies')->nullable();
        $sandwiches->sauces = $request->input('sauces')->nullable();

        $sandwiches->save();

        
        return redirect('sandwich')->with('Success');
    }
}
