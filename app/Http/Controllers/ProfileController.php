<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id)
    {
        $data = Lecturer::find($user_id);
        return view('profile', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function edit(Request $request, $id)
    {
        $data = $request->all();
        if ($request->file()) {
            $filePath = $request->file('lecturer_image')->store('public/profile');
            $data['lecturer_image'] = $filePath;
        }
        if ($data['lecturer_password'] == null or $data['lecturer_password'] == "") {
            unset($data['lecturer_password']);
        }
        if ($data['lecturer_username']) {
            $data['lecturer_username'] = $data['lecturer_username'] . "@rmutsb.ac.th";
        }
        Lecturer::find($id)->update($data);

        return Redirect()->back()->with('success', 'success');
    }

    public function edit_img(Request $request, $id)
    {
        $data = $request->all();
        if ($request->file()) {
            $filePath = $request->file('lecturer_image')->store('public/profile');
            $data['lecturer_image'] = $filePath;
        }
        Lecturer::find($id)->update($data);

        return Redirect()->back();
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
