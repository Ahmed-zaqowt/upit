<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class adminController extends Controller
{
    function index(){
        $roles = Role::all() ;
        $users = User::query()->where('status' , '<>' , 'user')->get();
        return view('admin.admin.index' , compact('users' , 'roles'));
    }

    function store(Request $request)
    {


        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required',  Rules\Password::defaults()],
            'image' => ['required'],
             'role' => 'required'
        ]);



        $imgname = 'user_'.rand().time();
        $request->file('image')->move(public_path('images'), $imgname);


        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $imgname,
            'status' => $request->role ,
            'role_id' => $request->role ,
        ]);



        return redirect()->back()->with('msg', 'Admin added successfully')->with('type', 'success');

    }



    function update(Request $request)
    {

        $request->validate([
            'name' => 'required' ,
            'email' => ['required' , 'email'] ,
            'role' => 'required' ,
        ]);

        $user = User::query()->findOrFail($request->id) ;
        $user->update([
            'name' => $request->name ,
            'email' => $request->email ,
            'role' => $request->role ,
            'status' => $request->role
        ]);

        if ($request->hasFile('image')) {
            \Illuminate\Support\Facades\File::delete(public_path('images/' . $user->image));
            $imgname = 'upit_'.rand().time();
            $request->file('image')->move(public_path('images'), $imgname);

            $user->update(
                [
                    'image' => $imgname
                ]
            );
        }

        return redirect()->back()->with('msg', 'Admin Updated successfully')->with('type', 'success');
    }

    function delete($id)
    {
        $news = User::query()->findOrFail($id);
        \Illuminate\Support\Facades\File::delete(public_path('images/' . $news->image));
        $news->delete();
        return redirect()->back()->with('msg', 'Admin deleted successfully')->with('type', 'success');
    }

}
