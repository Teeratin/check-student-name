<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        if(auth()->user()->lecturer_type == 1){
            return redirect()->route('manage_lecturer_index');
        }else{
            return redirect()->route('menu');
        }

        return view('menu');
    }

    public function menu_section()
    {
        return view('menu_section');
    }

}
