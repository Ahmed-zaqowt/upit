<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class orderController extends Controller
{
    function store(Request $request , $id){
           Order::create([
              'user_id' => Auth::user()->id ,
              'service_id' => $id
           ]);

            return response()->json('add seccussed');
    }

    function delete($id){
        $order = Order::query()->findOrFail($id) ;

        $order->update([
            'status' => Order::canceled ,
        ]);

        return response()->json('delete seccussed');

    }
}
