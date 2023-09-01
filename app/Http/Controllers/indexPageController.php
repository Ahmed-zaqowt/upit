<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use App\Models\Image;
use App\Models\index;
use App\Models\Title;
use Faker\Core\File;
use Illuminate\Http\Request;

class indexPageController extends Controller
{
    function home()
    {
         $about = index::find(1) ?? null ;
         $slider_index_top = Image::query()->where('location' , 'index.slider')->get();
         $title_one = Title::query()->where('location' , 'index.title.1')->first();
         $image_card = Image::query()->where('location' , 'index.image.card')->get();
         $image_partners = Image::query()->where('location' , 'index.partners')->get();
        $image_clients = Image::query()->where('location' , 'index.clients')->get();
         return view('admin.index_page.index' , compact('slider_index_top' ,
             'title_one' , 'image_card' , 'image_partners' , 'image_clients' , 'about'));
    }

    function upload_image(Request $request)
    {
        $request->validate([
            'image' => 'required' ,
        ]);

        $imgname = 'upit_'.rand().time();
        $request->file('image')->move(public_path('images'), $imgname);

           Image::create([
              'image' => $imgname ,
              'location' => $request->location
           ]);
         return redirect()->back()->with('msg', 'Image added successfully')->with('type', 'success') ;
    }

    function update_image(Request $request)
    {

        if($request->hasFile('image')){
           $image = Image::query()->findOrFail($request->id);
           \Illuminate\Support\Facades\File::delete(public_path('images/' . $image->image));
           $imgname = 'upit_'.rand().time();
           $request->file('image')->move(public_path('images'), $imgname);

           $image->update([
               'image' => $imgname ,
           ]);
       }
        return redirect()->back()->with('msg', 'Image updated successfully')->with('type', 'success');
    }

    function delete_image($id){
        $image = Image::query()->findOrFail($id);
        \Illuminate\Support\Facades\File::delete(public_path('images/' . $image->image));
        Image::destroy($id);
        return redirect()->back()->with('msg', 'Image deleted successfully')->with('type', 'success');
    }

   function text(Request $request)
   {

       $request->validate([
           'name' => 'required' ,
       ]);
       Title::query()->updateOrCreate(
       [
           'id' => $request->id
       ],
       [
           'name' => $request->name ,
           'location' => $request->location
       ]);
       return redirect()->back()->with('msg2', 'Text updated successfully')->with('type', 'success');
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
       ]);


       if ($request->hasFile('image')) {
           $imgname = 'upit_'.rand().time();
           $request->file('image')->move(public_path('images'), $imgname);

           index::query()->updateOrCreate(
               ['id' => $request->id ] , ['image' => $imgname]);
       }


       index::query()->updateOrCreate(
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


           ]
       );

       return redirect()->back();
   }

}
