<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Image;
use App\Models\News;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class careerController extends Controller
{
    function index()
    {
        return view('admin.career.index');
    }

    public function getdata(Request $request)
    {
        $collge = Career::query();
        return DataTables::of($collge)
            ->addIndexColumn()
            ->addColumn('action', function ($qur) {
                $data_attr = '';
                $data_attr .= 'data-id="' . $qur->id  . '" ';
                $data_attr .= 'data-title="' . $qur->title . '"';
                $data_attr .= 'data-subtitle="' . $qur->subtitle . '"';
                $data_attr .= 'data-desc="' . $qur->desc . '"';
                $data_attr .= 'data-start="' . $qur->desc . '"';
                $data_attr .= 'data-end="' . $qur->desc . '"';
                $string = '';

                $string .= '<button class="edit_btn btn btn-sm btn-outline-primary btn_edit" data-bs-toggle="modal" data-bs-target="#edit-modal"
                 ' . $data_attr . '>' . __('edit') . '</button>';
                $string .= ' <button type="button"  class="btn btn-sm btn-outline-danger btn_delete" data-id="' . $qur->id . '" data-url="/admin/career/delete/' . $qur->id . '">' . __('delete') . '  </button>';

                return $string;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function store(Request $request)
    {

        $rules = [
            'title' => 'required',
            'subtitle' => 'required',
            'desc' => 'required',
            'start' => 'required',
            'end' => 'required',
        ];

        $this->validate($request, $rules);


        $data = [
            'title' => $request->title,
            'subtitle' => $request->title,
            'desc' => $request->desc,
            'start' => $request->start,
            'end' => $request->end,
        ];

        Career::query()->create($data);

        return  response()->json([
            'success' => 'Added Career Successfully'
        ], 201);
    }

    public function update(Request $request)
    {
        $rules = [
            'title' => 'required',
            'subtitle' => 'required',
            'desc' => 'required',
            'start' => 'required',
            'end' => 'required',
        ];
        $this->validate($request, $rules);


        $news = Career::findOrFail($request->id);
        $data = [
            'title' => $request->title,
            'subtitle' => $request->title,
            'desc' => $request->desc,
            'start' => $request->start,
            'end' => $request->end,
        ];

        $news->update($data);

        return  response()->json([
            'success' => 'Updated News Successfully'
        ], 201);
    }






    public function delete($id)
    {
        $news = Career::query()->findOrFail($id);
        $news->delete();
        return  response()->json([
            'success' => 'Deleted Career Successfully'
        ] , 201 ) ;

    }
}
