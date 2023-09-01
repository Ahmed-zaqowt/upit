<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Order;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class orderController extends Controller
{
    function index(){
        return view('admin.order.index');
    }

    public function getdata(Request $request)
    {
        $collge = Order::query();
        return DataTables::of($collge)
            ->addIndexColumn()
            ->addColumn('name' , function ($qur){
                return $qur->service->name ;
            })
            ->addColumn('user' , function ($qur){
                return $qur->user->name ;
            })
            ->addColumn('email' , function ($qur){
                return $qur->user->email ;
            })
            ->addColumn('status' , function ($qur){
                return $qur->status ;
            })
            ->addColumn('action', function ($qur) {
                $data_attr = '';
                $data_attr .= 'data-status="' . $qur->status  . '" ';
                $data_attr .= 'data-id="' . $qur->id  . '" ';

                $string = '';
                $string .= '<button class="edit_btn btn btn-sm btn-outline-primary btn_edit my-2" data-bs-toggle="modal" data-bs-target="#edit-modal"
                 ' . $data_attr . '>' . __('edit') . '</button> <br>';
                return $string;
            })
            ->rawColumns(['action' , 'name' , 'email' , 'service'])
            ->make(true);
    }

    function update(Request $request){
        $request->validate([
          $request->status => 'required'
        ]);

        $order = Order::query()->findOrFail($request->id);
        $order->update([
          'status' => $request->status
        ]);

        return  response()->json([
            'success' => 'Updated News Successfully'
        ], 201);
    }
}
