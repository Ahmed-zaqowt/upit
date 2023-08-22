<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Image;
use App\Models\News;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Solution;
use App\Models\Store;
use App\Models\Title;
use App\Models\User;
use http\Client;
use Illuminate\Http\Request;

class homeController extends Controller
{


    function home()
    {
        $slider_index_top = Image::query()->where('location' , 'index.slider')->get();
        $title_one = Title::query()->where('location' , 'index.title.1')->first();
        $image_card = Image::query()->where('location' , 'index.image.card')->get();
        $image_partners = Partner::all();
        $image_clients = User::query()->where('status' , 'user' )->get();
        return view('front.index' , compact('slider_index_top' ,
            'title_one' , 'image_card' , 'image_partners' , 'image_clients'));
    }

    function news()
    {
       $image_one = Image::query()->where('location' , 'news.one')->first();
       $news = News::all();
       return view('front.news' , compact('image_one' , 'news'));
    }

    function read_news($id)
    {
        $image_one = Image::query()->where('location' , 'news.one')->first();
        $news = News::query()->findOrFail($id) ;
        return view('front.read_news' , compact('image_one' , 'news'));
    }

    function clients(){
        $users = User::all();
        return view('front.clients' , compact('users'));
    }

    function maintenance(){
        return view('front.maintenance');
    }

    function about()
    {
        $image_partners = Partner::all();
        return view('front.about' ,compact('image_partners'));
    }

    function solution()
    {
        $services = Service::all();
        $image_partners = Partner::all();
        return view('front.solution' ,compact('image_partners' , 'services'));
    }

    function contact()
    {
        return view('front.contact');
    }

    function career()
    {
        return view('front.career');

    }

    function post_contact(Request $request)
    {
         $request->validate([
             'msg' => 'required' ,
             'name' => 'required|string' ,
             'email' => 'required|email' ,
         ]);

         Contact::create([
             'msg' => $request->msg ,
              'name' => $request->name ,
             'email' => $request->email
          ]);
    }

    function dashboard()
    {
        $user =   User::query()->where('status' , 'user')->count();
        $news =  News::query()->count() ;
        $partner =  Partner::query()->count();
       $service =  Service::query()->count();
       $solution =  Solution::query()->count();
       $store =  Store::query()->count();
       $contact =  Contact::query()->count();
        return view('admin.dashboard' , compact('user' , 'news' , 'partner'
            , 'service' , 'solution' , 'store' , 'contact'));
    }


}
