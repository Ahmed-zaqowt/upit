<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    function index()
    {
        return view('admin.profile.index');
    }

    function update(Request $request , $id)
    {
        $admin = User::query()->findOrFail($id) ;
        $request->validate([
            'name' => 'required' ,
            'email' => 'required' ,
        ]);

        if ($request->hasFile('image')) {
            \Illuminate\Support\Facades\File::delete(public_path('images/' . $admin->image));
            $imgname = 'user_'.rand().time();
            $request->file('image')->move(public_path('images'), $imgname);

            $admin->update(
                [
                    'image' => $imgname
                ]
            );
        }

        $admin->update([
           'name' => $request->name ,
           'email' => $request->email
        ]);
        return redirect()->back();
    }

}
