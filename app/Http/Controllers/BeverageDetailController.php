<?php

namespace App\Http\Controllers;

use App\Models\BeverageDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BeverageDetailController extends Controller
{
    //
    public function index()
    {   
        $beverages = DB::table('beverage_details')->get();
        return view('beverage', ['beverages'=>$beverages]);
    }

    public function store(Request $request)
    {
        $beverages = new BeverageDetail;
        $beverages->beverage = $request->input('beverage');
        $beverages->quantity = $request->input('quantity');
        $beverages->save();

        return redirect('beverage')->with('Success');

    }
}
