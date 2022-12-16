<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Lecturer::all();
        return view('manage.lecturer', ['member' => $data]);
    }

    public function add()
    {
        return view('add.add_lecturer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = $request->all();
        if ($data['lecturer_username']) {
            $data['lecturer_username'] = $data['lecturer_username'] . "@rmutsb.ac.th";
        }
        if ($request->file()) {
            $fileName = time() . '_' . $request->lecturer_image->getClientOriginalName();
            $filePath = $request->file('lecturer_image')->storeAs('uploads', $fileName, 'public');
            $data['lecturer_image'] = $filePath;
        }

        Lecturer::create($data);

        return redirect()->route('manage_lecturer_index');
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
        $data = Lecturer::find($id);

        return view('edit.edit_lecturer', ['id' => $id, 'data' => $data]);
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
        if ($request->file()) {
            $fileName = time() . '_' . $request->lecturer_image->getClientOriginalName();
            $filePath = $request->file('lecturer_image')->storeAs('uploads', $fileName, 'public');
            $data['lecturer_image'] = $filePath;
        }
        if ($data['lecturer_password'] == null or $data['lecturer_password'] == "") {
            unset($data['lecturer_password']);
        }
        if ($data['lecturer_username']) {
            $data['lecturer_username'] = $data['lecturer_username'] . "@rmutsb.ac.th";
        }
        Lecturer::find($id)->update($data);

        return redirect()->route('manage_lecturer_index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Lecturer::find($id)->delete();

        return redirect()->route('manage_lecturer_index');
    }
}
