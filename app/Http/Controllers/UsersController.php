<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Database\Eloquent\Model;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $users = new user();

        $users->name = request('nameInput');
        $users->email = request('emailInput');
        $users->phone = request('phoneInput');
        $users->password = request('passwordInput');
        $users->remember_token = request('tokenInput');
        $users->save();

        return redirect('/users');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = \App\users::find($id);

        return view('users.show', compact('users'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = \App\users::find($id);

        return view('users.edit', compact('users'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {

        $users = \App\users::find($id);

        $users->name = request('nameInput');
        $users->email = request('emailInput');
        $users->phone = request('phoneInput');
        $users->remember_token = request('tokenInput');

        $users->save();

        return redirect('/users');

    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\users::findOrFail($id)->delete();
        return redirect('/users');
    }
}