<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Scoring;
use App\Models\Section;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Subject_Student;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Subject::where('lecturer_id', auth()->user()->lecturer_id)->get();
        return view('manage.subject', compact('data'));
    }

    public function add()
    {
        $courses = Course::get();
        $scoring = Scoring::where('lecturer_id', auth()->user()->lecturer_id)->get();
        $section = Section::get();
        return view('add.subject', compact('courses', 'scoring', 'section'));
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $create = Subject::create($data);
        if ($create) {
            $section_id = $request->input('section_id');
            $students = Student::where('section_id', $section_id)->pluck('student_id');
            $create->students()->attach($students);
        }
        return redirect()->route('manage_subject_index');
    }

    public function add_student(Request $request)
    {
        foreach ($request->checkbox as $key => $id) {
            $insert = [
                'student_id' => $request->checkbox[$key],
                'subject_id' => $request->subject_id,
            ];
            Subject_Student::create($insert);
        }
        return redirect()->back();
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
    public function edit(Request $request, $id)
    {
        $courses = Course::get();
        $scoring = Scoring::where('lecturer_id', auth()->user()->lecturer_id)->get();
        $section = Section::get();
        $students = Subject_Student::where('subject_id', $id)->get();
        $data = Subject::find($id);
        $filter_student = Student::where('section_id', 1)->get();

        if ($request->ajax()) {
            $students = Student::where(['section_id' => $request->filter_student])->get();
            return response()->json(['students' => $students]);
        }
        return view('edit.subject', compact('id', 'data', 'courses', 'scoring', 'section', 'students', 'filter_student'));
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
        $data = $request->all();
        Subject::find($id)->update($data);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Subject::find($id)->delete();
        return redirect()->route('manage_subject_index');
    }

    public function delete_student($id,$sid)
    {
        Subject_Student::where('subject_id', $id)->where('student_id',$sid)->delete();

        return redirect()->back();
    }

}
