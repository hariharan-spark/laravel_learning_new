<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller
{
    public function create()
    {
        $get=new User;
        $getUser=$get->get();
        return view('register',compact('getUser'));
    }

    public function store(Request $requst)
    {
        $create=new User;
        $create->name=$requst->name;
        $create->email=$requst->email;
        $create->password=$requst->password;
        $create->save();
        return back();
    }

    public function userUpdate(Request $request)
    {
        User::find($request->id)->update([
            'name'=>$request->name,
            'email'=>$request->email
        ]);
        return back();
    }
    public function UserDelete($id)
    {
        $create=new User;
        $create->where('id',$id)->first()->delete();
        return back();
    }









}
