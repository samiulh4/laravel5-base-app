<?php

namespace App\Modules\Users\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Modules\Users\Models\Users;

class UsersController extends Controller
{


    public function index()
    {
        return view("Users::index");
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        //decrypt
        $request->validate([
            'role_id'  => 'required',
            'name'     => 'required|string',
            'email'    => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:6',
        ]);
        try {
            $user = new Users;
            $user->role_id = $request->role_id;
            $user->name = trim($request->name);
            $user->email = trim($request->email);
            $user->country_code = $request->country_code;
            $user->phone = trim($request->phone);
            $user->password = bcrypt($request->password);
            $user->save();


            return redirect()->route('/')->with('success', 'User Registration Successfully.');
        }catch (\Exception $e){
            dd($e->getMessage());
        }
    }// end -:- store()


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    public function register()
    {
        return view("Users::register");
    }
}
