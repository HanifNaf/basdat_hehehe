<?php

namespace App\Http\Controllers;
use App\Models\content;

use Illuminate\Http\Request;

class menu extends Controller
{
    public function index()
    {
        $data=content::all();
        return view('content.index',['data'=>$data]);
    }
};
