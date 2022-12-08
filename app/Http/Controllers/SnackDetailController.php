<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SnackDetail;
use Illuminate\Support\Facades\DB;

class SnackDetailController extends Controller
{
    //
    public function index()
    {   
        $snacks = DB::table('snack_details')->get();
        return view('snack', ['snacks'=>$snacks]);
    }

    public function store(Request $request)
    {
        $snacks = new SnackDetail();
        $snacks->snack = $request->input('beverage');
        $snacks->quantity = $request->input('quantity');
        $snacks->save();

        return redirect('beverage')->with('Success');

    }
}