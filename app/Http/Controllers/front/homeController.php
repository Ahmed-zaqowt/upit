<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use App\Models\Career;
use App\Models\Contact;
use App\Models\ContactUs;
use App\Models\Feature;
use App\Models\Image;
use App\Models\index;
use App\Models\News;
use App\Models\Order;
use App\Models\Page;
use App\Models\Partner;
use App\Models\Service;
use App\Models\Solution;
use App\Models\Store;
use App\Models\Title;
use App\Models\User;
use http\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{


    function home()
    {
        $index = index::query()->where('id_create' , '1')->first();
        $slider_index_top = Image::query()->where('location' , 'index.slider')->get();
        $title_one = Title::query()->where('location' , 'index.title.1')->first();
        $image_card = Image::query()->where('location' , 'index.image.card')->get();
        $image_partners = Partner::all();
        $image_clients = User::query()->where('status' , 'user' )->get();
        return view('front.index' , compact('slider_index_top' ,
            'title_one' , 'image_card' , 'image_partners' , 'image_clients' , 'index'));
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
        $services = Service::all();
        return view('front.maintenance' , compact('services' ));
    }

    function about()
    {
        $about = Aboutus::query()->find(1) ?? null ;
        $image_partners = Partner::all();
        return view('front.about' ,compact('image_partners' , 'about'));
    }

    function solution($id)
    {
        $solution = Page::query()->where('solution_id' , $id)->first();
        $services = Service::all();
        $image_partners = Partner::all();
        return view('front.solution' ,compact('image_partners' , 'services' , 'solution'));
    }

    function contact()
    {
        $contacts = ContactUs::all();
        return view('front.contact' , compact('contacts'));
    }

    function career()
    {
        $careers = Career::all();
        return view('front.career' , compact('careers'));

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


    function search(Request $request){

        $careers =  Career::query()->where('title' , '%Like%' , $request->search)->get();

        return view('front.career' , compact('careers'));
    }
}
