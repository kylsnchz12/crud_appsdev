<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\AppUser;
use Validator;


class AppUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = AppUser::paginate(6);
        return view('users.index', compact('users'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validation = Validator::make($request->all(), AppUser::$rules);

        if ($validation->passes())
        {
            $newuser = new AppUser;
            $newuser->username = $request->username;
            $newuser->name = $request->name;
            $newuser->password = bcrypt($request->password);
            $newuser->email = $request->email;
            $newuser->phone = $request->phone;
            $newuser->save();
            return redirect()->route('users.index');
        }   

        return redirect()->route('users.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $user = AppUser::find($id);
        if (is_null($user))
        {
            return redirect()->route('users.index');
        }
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $user = AppUser::find($id);
        if (is_null($user))
        {
            return redirect()->route('users.index');
        }
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $validation = Validator::make($request->all(), AppUser::$updaterules);
        if ($validation->passes())
        {
            $user = AppUser::find($id);
            $user->username = $request->username;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->update();
            return redirect()->route('users.show', $id);
        }
        return redirect()->route('users.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        AppUser::find($id)->delete();
        return redirect()->route('users.index'); 
    }
}
