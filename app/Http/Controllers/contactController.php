<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\News;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class contactController extends Controller
{
    function index()
    {
        return view('admin.order.index');
    }

    public function getdata(Request $request)
    {
        $collge = Contact::query();
        return DataTables::of($collge)
            ->addIndexColumn()
            ->addColumn('action', function ($qur) {
                $string = '';
                $string .= ' <button type="button"  class="btn btn-sm btn-outline-danger btn_delete" data-id="' . $qur->id . '" data-url="/admin/contact/delete/' . $qur->id . '">' . __('delete') . '  </button>';
                return $string;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    function delete($id)
    {
        $news = Contact::query()->findOrFail($id);
        $news->delete();
        return  response()->json([
            'success' => 'Deleted Message Successfully'
        ] , 201 ) ;
    }
}
