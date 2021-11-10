<?php

namespace App\Http\Controllers\Authentication;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userdata = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required',
        ]);
        $userdata['password'] = bcrypt($request->password);
        User::create($userdata);
        return redirect(route('show-login'))->with('success','New user registered successfully :)');
    }
}
