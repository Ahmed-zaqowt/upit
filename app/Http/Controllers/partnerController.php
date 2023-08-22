<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class partnerController extends Controller
{
    function index()
    {
        $users = Partner::all();
        return view('admin.partner.index' , compact('users'));
    }
    function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'image' => ['required'],
        ]);



        $imgname = 'user_'.rand().time();
        $request->file('image')->move(public_path('images'), $imgname);


        Partner::create([
            'name' => $request->name,
            'image' => $imgname,
        ]);


        return redirect()->back()->with('msg', 'Partner added successfully')->with('type', 'success');

    }

    function update(Request $request)
    {

        $request->validate([
            'name' => 'required' ,
        ]);

        $user = Partner::query()->findOrFail($request->id) ;

        $user->update([
            'name' => $request->name ,
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

        return redirect()->back()->with('msg', 'Partner updated successfully')->with('type', 'success');
    }


    function delete($id)
    {
        $news = Partner::query()->findOrFail($id);
        \Illuminate\Support\Facades\File::delete(public_path('images/' . $news->image));
        $news->delete();
        return redirect()->back()->with('msg', 'Partner deleted successfully')->with('type', 'success');
    }
}
