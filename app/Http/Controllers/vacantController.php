<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Vacant;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class vacantController extends Controller
{
    function index(){
        $vacant = Vacant::all();
        return view('admin.vacant.index' , compact('vacant'));
    }

    function getdata(){
        $collge = Vacant::query();
        return DataTables::of($collge)
            ->addIndexColumn()
            ->addColumn('action', function ($qur) {
                $string = ' <button type="button"  class="btn btn-sm btn-outline-danger btn_delete" data-id="' . $qur->id . '" data-url="/admin/vacant/delete/' . $qur->id . '">' . __('delete') . '  </button>';
                return $string;
            })
            ->addColumn('name' , function($qur){
                return $qur->user->name ;
            })
            ->addColumn('email' , function($qur){
                return $qur->user->email ;
            })
            ->addColumn('vacancy' , function($qur){
                return $qur->career->title ;
            })
            ->addColumn('date' , function($qur){
                return $qur->created_at->toDateString() ;
            })
            ->rawColumns(['action' , 'name' , 'email' , 'vacancy' , 'date'])
            ->make(true);
    }

    function store(Request $request ,$id){


        Vacant::create([
            'user_id' => $id ,
            'career_id' => $request->id ,
        ]);

        return redirect()->back();

    }

    function delete($id){
        $news = Vacant::query()->findOrFail($id);
        $news->delete();
        return  response()->json([
            'success' => 'Deleted News Successfully'
        ] , 201 ) ;
    }
}
