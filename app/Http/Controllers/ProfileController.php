<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        return view('profile',['users'=>$users]);
    }
    public function edit($id)
    {
        $users = DB::table('users')->where('id',$id)->get();
        return view('profile.edit',['users' => $users]);
    }
    public function update(Request $request, $id)
    {
        DB::table('users')->where('id',$request->id)->update([
            'name' => $request->name,
            'username' => $request->username,
            'password' => $request->password
        ]);
    return redirect('/profile');
    }
}
