<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Title;
use Faker\Core\File;
use Illuminate\Http\Request;

class indexPageController extends Controller
{
    function home()
    {
         $slider_index_top = Image::query()->where('location' , 'index.slider')->get();
         $title_one = Title::query()->where('location' , 'index.title.1')->first();
         $image_card = Image::query()->where('location' , 'index.image.card')->get();
         $image_partners = Image::query()->where('location' , 'index.partners')->get();
        $image_clients = Image::query()->where('location' , 'index.clients')->get();
         return view('admin.index_page.index' , compact('slider_index_top' ,
             'title_one' , 'image_card' , 'image_partners' , 'image_clients'));
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
       ] ,
       [
           'name' => $request->name ,
           'location' => $request->location
       ]);
       return redirect()->back()->with('msg2', 'Text updated successfully')->with('type', 'success');
   }


}
