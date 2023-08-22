<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Solution;
use Illuminate\Http\Request;

class solutionController extends Controller
{
    function index()
    {
        $solutions = Solution::all();
        return view('admin.solution.index' , compact('solutions'));
    }

    function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);




        Solution::create([
            'name' => $request->name,
        ]);


        return redirect()->back()->with('msg', 'Solution added successfully')->with('type', 'success');

    }

    function update(Request $request)
    {

        $request->validate([
            'name' => 'required' ,
        ]);

        $solution = Solution::query()->findOrFail($request->id) ;

        $solution->update([
            'name' => $request->name ,
        ]);

        return redirect()->back()->with('msg', 'Solution updated successfully')->with('type', 'success');
    }


    function delete($id)
    {
        $news = Solution::query()->findOrFail($id);
        $news->delete();
        return redirect()->back()->with('msg', 'Partner deleted successfully')->with('type', 'success');
    }
}
