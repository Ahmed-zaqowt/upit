<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class storeController extends Controller
{
    function index(){
        $stores = Store::all();
        return view('admin.store.index' , compact('stores'));
    }


    function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'url' => ['required', 'string', 'max:255'  , 'url'],

        ]);




        Store::create([
            'url' => $request->url,
            'name' => $request->name,
        ]);


        return redirect()->back()->with('msg', 'Store added successfully')->with('type', 'success');

    }

    function update(Request $request)
    {

        $request->validate([
            'url' => 'required|url' ,
            'name' => 'required' ,
        ]);

        $user = Store::query()->findOrFail($request->id) ;
        $user->update([
            'url' => $request->url ,
            'name' => $request->name
        ]);


        return redirect()->back()->with('msg', 'Store Updated successfully')->with('type', 'success');
    }

    function delete($id)
    {
        $news = Store::query()->findOrFail($id);
        $news->delete();
        return redirect()->back()->with('msg', 'Store deleted successfully')->with('type', 'success');
    }

}
