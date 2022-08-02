<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        
        if(Auth::id())
        {
            if(Auth::user()->role=='0')
            {
                return view('User.index');
            }
            else{
                return view('Admin.index');
            }   
           
        }
        else{
            return redirect()->back();
        }
    }
    public function show(){
        return view('User.index');
    }
}
