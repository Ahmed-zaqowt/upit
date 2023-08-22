<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class newController extends Controller
{
    function index()
    {
        $image_news = Image::query()->where('location' , 'news.one')->first();
        return view('admin.news.index' , compact('image_news'));
    }

    public function getdata(Request $request)
    {
        $collge = News::query();
        return DataTables::of($collge)
            ->addIndexColumn()
            ->addColumn('action', function ($qur) {
                $data_attr = '';
                $data_attr .= 'data-id="' . $qur->id  . '" ';
                $data_attr .= 'data-title="' . $qur->title . '"';
                $data_attr .= 'data-description="' . $qur->description . '"';
                // $data_attr .= 'data-image="'.$qur->image.'"';
                $string = '';

                $string .= '<button class="edit_btn btn btn-sm btn-outline-primary btn_edit" data-bs-toggle="modal" data-bs-target="#edit-modal"
                 ' . $data_attr . '>' . __('edit') . '</button>';
                $string .= ' <button type="button"  class="btn btn-sm btn-outline-danger btn_delete" data-id="' . $qur->id . '" data-url="/admin/news/delete/' . $qur->id . '">' . __('delete') . '  </button>';

                return $string;
            })
            ->addColumn('image' , function($qur){
                $imageData = $qur->image;
                return $imageData;
            })
            ->addColumn('description' , function($qur){
                return $qur->description ;
            })
            ->rawColumns(['action' , 'image'])
            ->make(true);
    }

    public function store(Request $request)
    {

        $rules = [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ];

        $this->validate($request, $rules);

        $imgname = 'news_'.rand().time();
        $request->file('image')->move(public_path('images'), $imgname);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imgname
        ];

         News::query()->create($data);

        return  response()->json([
            'success' => 'Added News Successfully'
        ], 201);
    }

    public function update(Request $request)
    {
        $rules = [
            'title' => 'required',
            'description' => 'required',
        ];
        $this->validate($request, $rules);


        $news = News::findOrFail($request->id);
        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];
        $news->update($data);

        if ($request->hasFile('image')) {
            \Illuminate\Support\Facades\File::delete(public_path('images/' . $news->image));
            $imgname = 'upit_'.rand().time();
            $request->file('image')->move(public_path('images'), $imgname);

            $news->update(
                [
                    'image' => $imgname
                ]
            );
        }
        return  response()->json([
            'success' => 'Updated News Successfully'
        ], 201);
    }






    public function delete($id)
    {
        $news = News::query()->findOrFail($id);
        \Illuminate\Support\Facades\File::delete(public_path('images/' . $news->image));
        $news->delete();
        return  response()->json([
            'success' => 'Deleted News Successfully'
        ] , 201 ) ;

    }
}
