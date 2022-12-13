<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('menu');
    }

    public function menu_section()
    {
        return view('menu_section');
    }

    public function timetable_normal()
    {
        return view('timetable_normal');
    }

    public function timetable_evening()
    {
        return view('timetable_evening');
    }

    public function profile()
    {
        return view('profile');
    }

    public function manage_course()
    {
        return view('manage.course');
    }

    public function manage_lecturer()
    {
        return view('manage.lecturer');
    }

    public function manage_scoring()
    {
        return view('manage.scoring_criteria');
    }

    public function manage_section()
    {
        return view('manage.section');
    }

    public function manage_subject()
    {
        return view('manage.subject');
    }
}
