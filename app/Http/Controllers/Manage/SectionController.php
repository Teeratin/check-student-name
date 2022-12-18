<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Imports\StudentImport;
use Maatwebsite\Excel\Facades\Excel;


class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Section::all();
        return view('manage.section', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->all();
        Section::create($data);
        return redirect()->route('manage_section_index');
    }

    public function create_student(Request $request)
    {
        $data = $request->all();
        Student::create($data);
        return redirect()->route('manage_section_edit', $request->section_id);
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
        $data_student = Student::select('student_id', 'student_code', 'student_perfix', 'student_fname', 'student_lname', 'section_id')->where('section_id', $id)->get();
        $data_section = Section::find($id);
        return view('edit.section', ['id' => $id], ['data_student' => $data_student], ['data_section' => $data_section]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $sid)
    {
        $data = $request->all();
        Student::find($sid)->update($data);
        return Redirect()->route('manage_section_edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Section::find($id)->delete();
        Student::where('section_id', $id)->delete();
        return redirect()->route('manage_section_index');
    }

    public function delete_student($id, $sid)
    {
        Student::find($sid)->delete();
        return redirect()->route('manage_section_edit', $id);
    }

    public function import_excel(Request $request,$id)
    {
        $data = Excel::toArray(new StudentImport,$request->file('student_file'))[0];

        foreach($data as $item){
            $create = [
                'student_code' => $item['student_code'],
                'student_perfix' => $item['student_perfix'],
                'student_fname' => $item['student_fname'],
                'student_lname' => $item['student_lname'],
                'section_id' => $id,
            ];
            Student::create($create);
        }
        return back();
        // return redirect()->route('manage_section_index');
    }
}
