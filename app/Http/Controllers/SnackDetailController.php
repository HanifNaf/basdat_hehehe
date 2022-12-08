<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SnackDetail;

class SnackDetailController extends Controller
{
    //
    public function index()
    {
        return view('snack');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'snack' => "required",
        ]);

        SnackDetail::create($validatedData);
        
        return redirect('/sides');
    }
}
