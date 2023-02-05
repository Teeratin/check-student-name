<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    protected $rules = [
        'email' => 'nullable',
        'password' => 'nullable',
    ];

    protected $messages = [
        'email' => 'The :attribute must be a valid email address.',
        'required' => 'The :attribute field is required.',
    ];

    protected $attributes = [
        'email' => 'อีเมล',
        'password' => 'รหัสผ่าน',
    ];

    public function login()
    {
        return view('login');
    }

    public function subminLogin(Request $request)
    {

        $request->validate($this->rules, $this->messages, $this->attributes);

        if (auth()->attempt(['lecturer_username' => $request->input('email'), 'password' => $request->input('password')])) {
            if (auth()->user()->lecturer_type == 1) {
                return redirect()->route('manage_lecturer_index');
            } else {
                return redirect()->route('menu');
            }

        } else {

            $error = ['error' => 'อีเมลหรือรหัสผ่านไม่ถูกต้อง'];

            return redirect()->route('login')
                ->withErrors($error)->withInput();
        }

        if (!empty($request->fails()) && $request->fails()) {
            return redirect()->route('login')
                ->withErrors($request)
                ->withInput();
        }
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('login');
    }
}
