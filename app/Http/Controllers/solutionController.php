<?php

namespace App\Http\Controllers;

use App\Models\Page;
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
            'text1' => 'required' ,
            'text2' => 'required' ,
            'text3' => 'required' ,
            'text4' => 'required' ,
            'text5' => 'required' ,
            'text6' => 'required' ,
            'image' => 'required' ,
        ]);

        $imgname = 'news_'.rand().time();
        $request->file('image')->move(public_path('images'), $imgname);


        $s  = Solution::create([
            'name' => $request->name,
        ]);


        Page::create([
            'solution_id' => $s->id ,
            'text1' => $request->text1 ,
            'text2' => $request->text2 ,
            'text3' => $request->text3 ,
            'text4' => $request->text4 ,
            'text5' => $request->text5 ,
            'text6' => $request->text6 ,
            'image' => $imgname
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


    function edit($id){
        $page = Page::query()->findOrFail($id);
        return view('admin.solution.page' , compact('page'));
    }

    function update_page(Request $request , $id){
        $request->validate([
            'text1' => 'required' ,
            'text2' => 'required' ,
            'text3' => 'required' ,
            'text4' => 'required' ,
            'text5' => 'required' ,
            'text6' => 'required' ,
        ]);

         $page = Page::query()->findOrFail($id) ;
        if ($request->hasFile('image')) {
            \Illuminate\Support\Facades\File::delete(public_path('images/' . $page->image));
            $imgname = 'upit_'.rand().time();
            $request->file('image')->move(public_path('images'), $imgname);

            $page->update(
                [
                    'image' => $imgname
                ]
            );
        }

        $page->update([
            'text1' => $request->text1 ,
            'text2' => $request->text2 ,
            'text3' => $request->text3 ,
            'text4' => $request->text4 ,
            'text5' => $request->text5 ,
            'text6' => $request->text6 ,
        ]);

        return redirect()->back();
    }
}
