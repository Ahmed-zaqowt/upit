<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class clientController extends Controller
{
    function index()
    {
         $users = User::query()->where('status' , 'user')->get();
         return view('admin.client.index' , compact('users'));
    }

    function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required',  Rules\Password::defaults()],
             'role' => 'required' ,
            'image' => ['required'],
        ]);



        $imgname = 'user_'.rand().time();
        $request->file('image')->move(public_path('images'), $imgname);


           User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'image' => $imgname,
            'status' => $request->role ?? 'user' ,
            'role_id' => $request->role ?? 'user' ,
          ]);


        return redirect()->back()->with('msg', 'Client added successfully')->with('type', 'success');

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
            'role' => $request->role
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

        return redirect()->back()->with('msg', 'Client Updated successfully')->with('type', 'success');
    }

    function delete($id)
    {
        $news = User::query()->findOrFail($id);
        \Illuminate\Support\Facades\File::delete(public_path('images/' . $news->image));
        $news->delete();
        return redirect()->back()->with('msg', 'Client deleted successfully')->with('type', 'success');
    }

}
