<?php

namespace App\Http\Controllers;

use App\Models\Vacant;
use Dotenv\Validator;
use Illuminate\Http\Request;

class vacantController extends Controller
{
    function index(){
        $vacant = Vacant::all();
        return view('admin.vacant.index' , compact('vacant'));
    }

    function store($id){

        Vacant::create([
            'user_id' => $id
        ]);


        return redirect()->back();

    }
}
