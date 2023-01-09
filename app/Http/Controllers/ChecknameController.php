<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Subject;
use App\Models\Subject_Student;
use App\Models\Timetable;
use Illuminate\Http\Request;

class ChecknameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

        $subject = Subject::where('subject_id', $id)->first();
        return view('checkname', compact('id', 'subject'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function present($id, $sid)
    {
        $create = new Timetable;
        $create->tt_type = 'present';
        $create->date = date('Y-m-d');
        $create->student_id = $sid;
        $create->subject_id = $id;
        $create->save();
        return back();
    }

    public function update_present($id, $sid)
    {
        $update = Timetable::where('student_id', $sid)
            ->where('subject_id', $id)
            ->whereDate('date', date('Y-m-d'))->first();
        $update->tt_type = 'present';
        $update->save();
        return back();
    }

    public function late($id, $sid)
    {
        $create = new Timetable;
        $create->tt_type = 'late';
        $create->date = date('Y-m-d');
        $create->student_id = $sid;
        $create->subject_id = $id;
        $create->save();
        return back();
    }

    public function update_late($id, $sid)
    {
        $update = Timetable::where('student_id', $sid)
            ->where('subject_id', $id)
            ->whereDate('date', date('Y-m-d'))->first();
        $update->tt_type = 'late';
        $update->save();
        return back();
    }

    public function absent($id, $sid)
    {
        $create = new Timetable;
        $create->tt_type = 'absent';
        $create->date = date('Y-m-d');
        $create->student_id = $sid;
        $create->subject_id = $id;
        $create->save();
        return back();
    }

    public function update_absent($id, $sid)
    {
        $update = Timetable::where('student_id', $sid)
            ->where('subject_id', $id)
            ->whereDate('date', date('Y-m-d'))->first();
        $update->tt_type = 'absent';
        $update->save();
        return back();
    }

    public function leave(Request $request, $id, $sid)
    {
        $data = $request->all();
        $create = new Timetable;
        $create->tt_type = 'leave';
        $create->date = date('Y-m-d');
        $create->student_id = $sid;
        $create->subject_id = $id;
        $create->leave_description = $data['leave_description'];
        $create->leave_type = $data['leave_type'];
        $create->save();
        return back();
    }

    public function update_leave(Request $request, $id, $sid)
    {
        $data = $request->all();
        $update = Timetable::where('student_id', $sid)
            ->where('subject_id', $id)
            ->whereDate('date', date('Y-m-d'))->first();
        $update->tt_type = 'leave';
        $update->leave_description = $data['leave_description'];
        $update->leave_type = $data['leave_type'];
        $update->save();
        return back();
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
