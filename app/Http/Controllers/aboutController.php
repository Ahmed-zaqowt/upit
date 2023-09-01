<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use Illuminate\Http\Request;

class aboutController extends Controller
{
   function index()
   {
       $about = Aboutus::query()->find(1) ?? null; ;
       return view('admin.about.index' , compact('about')) ;
   }

   function store(Request $request){
     $request->validate([
         'text1' => 'required' ,
         'text2' => 'required' ,
         'text3' => 'required' ,
         'text4' => 'required' ,
         'text5' => 'required' ,
         'text6' => 'required' ,
         'text7' => 'required' ,
         'text8' => 'required' ,
         'text9' => 'required' ,
         'text10' => 'required' ,
         'text11' => 'required' ,
         'text12' => 'required' ,
         'text13' => 'required' ,
         'text14' => 'required' ,
         'text15' => 'required' ,
         'text16' => 'required' ,
         'text17' => 'required' ,
     ]);


       if ($request->hasFile('image_sec_1')) {
           $imgname = 'upit_'.rand().time();
           $request->file('image_sec_1')->move(public_path('images'), $imgname);

           Aboutus::query()->updateOrCreate(
               ['id' => $request->id ] , ['image_sec_1' => $imgname]);
       }

       if ($request->hasFile('image_sec_2')) {
           $imgname1 = 'upit_'.rand().time();
           $request->file('image_sec_2')->move(public_path('images'), $imgname1);
           Aboutus::query()->updateOrCreate(
               ['id' => $request->id ] , ['image_sec_2' => $imgname1]);
       }
       if ($request->hasFile('image_sec_3')) {
           $imgname2 = 'upit_'.rand().time();
           $request->file('image_sec_3')->move(public_path('images'), $imgname2);
           Aboutus::query()->updateOrCreate(
               ['id' => $request->id ] , ['image_sec_3' => $imgname2]);
       }


     Aboutus::query()->updateOrCreate(
         ['id' => $request->id] ,

         [
             'text1' => $request->text1 ,
             'text2' => $request->text2 ,
             'text3' => $request->text3 ,
             'text4' => $request->text4 ,
             'text5' => $request->text5 ,
             'text6' => $request->text6 ,
             'text7' => $request->text7 ,
             'text8' => $request->text8 ,
             'text9' => $request->text9 ,
             'text10' => $request->text10 ,
             'text11' => $request->text11 ,
             'text12' => $request->text12 ,
             'text13' => $request->text13 ,
             'text14' => $request->text14 ,
             'text15' => $request->text15 ,
             'text16' => $request->text16 ,
             'text17' => $request->text17 ,

         ]
     );

       return redirect()->back();
   }
}
