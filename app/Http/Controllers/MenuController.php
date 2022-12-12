<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    function index(){
        return view('menu');
    }

    function menu2(){
        return view('menu_section');
    }

    function timetable1(){
        return view('timetable1');
    }

    function timetable2(){
        return view('timetable2');
    }

    function profile(){
        return view('profile');
    }

    function manage_course(){
        return view('manage.course');
    }

    function manage_lecturer(){
        return view('manage.lecturer');
    }

    function manage_scoring(){
        return view('manage.scoring_criteria');
    }

    function manage_section(){
        return view('manage.section');
    }

    function manage_subject(){
        return view('manage.subject');
    }


}
