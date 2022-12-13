<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    public function index()
    {   
        $user = DB::table('user')->get();
        return view('user', ['user'=>$user]);
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->user = $request->input('username');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->confimation_password = $request->input('confimation_password');
        $user->save();

        return redirect('user')->with('Success');

    }
}