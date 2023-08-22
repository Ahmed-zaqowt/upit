<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Service;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class serviceController extends Controller
{
    function index()
    {
        return view('admin.service.index');
    }

    public function getdata(Request $request)
    {
        $collge = Service::query();
        return DataTables::of($collge)
            ->addIndexColumn()
            ->addColumn('action', function ($qur) {
                $data_attr = '';
                $data_attr .= 'data-id="' . $qur->id  . '" ';
                $data_attr .= 'data-title="' . $qur->name . '"';
                $data_attr .= 'data-description="' . $qur->description . '"';
                $string = '';

                $string .= '<button class="edit_btn btn btn-sm btn-outline-primary btn_edit" data-bs-toggle="modal" data-bs-target="#edit-modal"
                 ' . $data_attr . '>' . __('edit') . '</button>';
                $string .= ' <button type="button"  class="btn btn-sm btn-outline-danger btn_delete" data-id="' . $qur->id . '" data-url="/admin/service/delete/' . $qur->id . '">' . __('delete') . '  </button>';

                return $string;
            })
            ->addColumn('image' , function($qur){
                $imageData = $qur->image;
                return $imageData;
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
            'name' => $request->title,
            'description' => $request->description,
            'image' => $imgname
        ];

        Service::query()->create($data);

        return  response()->json([
            'success' => 'Added Service Successfully'
        ], 201);
    }

    public function update(Request $request)
    {
        $rules = [
            'title' => 'required',
            'description' => 'required',
        ];
        $this->validate($request, $rules);


        $news = Service::findOrFail($request->id);
        $data = [
            'name' => $request->title,
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
            'success' => 'Updated Service Successfully'
        ], 201);
    }






    public function delete($id)
    {
        $news = Service::query()->findOrFail($id);
        \Illuminate\Support\Facades\File::delete(public_path('images/' . $news->image));
        $news->delete();
        return  response()->json([
            'success' => 'Deleted News Successfully'
        ] , 201 ) ;

    }
}
