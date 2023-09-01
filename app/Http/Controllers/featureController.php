<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\Service;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class featureController extends Controller
{
    public function store(Request $request)
    {

        $rules = [
             'name' => 'required'
        ];

        $this->validate($request, $rules);

        $data = [
            'name' => $request->name,
            'service_id' => $request->id
        ];

        Feature::query()->create($data);

        return  response()->json([
            'success' => 'Added Feature Successfully'
        ], 201);
    }

    public function getdata(Request $request , $id)
    {
        $collge = Feature::query()->where('service_id' , $id);
        return DataTables::of($collge)
            ->addIndexColumn()
            ->addColumn('action', function ($qur) {
                $data_attr = '';
                $data_attr .= 'data-id="' . $qur->id  . '" ';
                $data_attr .= 'data-name="' . $qur->name . '"';
                $string = '';

                $string .= '<button class="edit_btn btn btn-sm btn-outline-primary btn_edit_f my-2" data-bs-toggle="modal" data-bs-target="#edit-modal-f"
                 ' . $data_attr . '>' . __('edit') . '</button> <br>';
                $string .= ' <button type="button"  class="btn btn-sm btn-outline-danger btn_delete" data-id="' . $qur->id . '" data-url="/admin/service/delete/' . $qur->id . '">' . __('delete') . '  </button>';

                return $string;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function update(Request $request)
    {
    dd($request->all());
        $rules = [
            'name' => 'required',
        ];
        $this->validate($request, $rules);


        $news = Feature::findOrFail($request->id);
        $data = [
            'name' => $request->name,
        ];

        $news->update($data);

        return  response()->json([
            'success' => 'Updated Service Successfully'
        ], 201);
    }

}
