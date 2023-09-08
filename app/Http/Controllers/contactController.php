<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactUs;
use App\Models\News;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class contactController extends Controller
{
    function index()
    {
        return view('admin.contact.index');
    }

    function contact(){
        return view('admin.contact_us.index');
    }

    function getdata_contact(Request $request){
        $collge = ContactUs::query();
        return DataTables::of($collge)
            ->addIndexColumn()
            ->addColumn('action', function ($qur) {
                $data_attr = '';
                $data_attr .= 'data-id="' . $qur->id  . '" ';
                $data_attr .= 'data-district="' . $qur->district . '"';
                $data_attr .= 'data-phone="' . $qur->phone . '"';
                $data_attr .= 'data-map="' . $qur->map . '"';
                $data_attr .= 'data-address="' . $qur->address . '"';
                $data_attr .= 'data-email="' . $qur->email . '"';
                // $data_attr .= 'data-image="'.$qur->image.'"';
                $string = '';

                $string .= '<button class="edit_btn btn btn-sm btn-outline-primary btn_edit" data-bs-toggle="modal" data-bs-target="#edit-modal"
                 ' . $data_attr . '>' . __('edit') . '</button>';
                $string .= ' <button type="button"  class="btn btn-sm btn-outline-danger btn_delete" data-id="' . $qur->id . '" data-url="/admin/contact/destroy/' . $qur->id . '">' . __('delete') . '  </button>';

                return $string;
            })
            ->addColumn('location' , function ($qur){
                $string = '';
                $string .= '<a target="_blank" href="' . $qur->map . '" class="btn btn-sm btn-outline-primary"
                   >' . __('location') . '</a>';

            return $string ;
            })
            ->rawColumns(['action'  , 'location'])
            ->make(true);
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

    function store(Request $request){

        $request->validate([
            'district' => 'required' ,
            'phone' => 'required' ,
            'location' => 'required' ,
            'email' => 'required' ,
            'address' => 'required' ,
        ]);

        ContactUs::create([
            'district' => $request->district ,
            'phone' => $request->phone ,
            'address' => $request->address ,
            'map' => $request->location ,
            'email' => $request->email ,
        ]);

        return  response()->json([
            'success' => 'Create Message Successfully'
        ] , 201 ) ;


    }


    function update(Request $request){
        $request->validate([
            'district' => 'required' ,
            'phone' => 'required' ,
            'location' => 'required' ,
            'email' => 'required' ,
            'address' => 'required' ,
        ]);

        $contact = ContactUs::query()->findOrFail($request->id);
        $contact->update([
            'district' => $request->district ,
            'phone' => $request->phone ,
            'address' => $request->address ,
            'map' => $request->location ,
            'email' => $request->email ,
        ]);


        return  response()->json([
            'success' => 'Create Message Successfully'
        ] , 201 ) ;
    }



    function delete($id)
    {
        $news = Contact::query()->findOrFail($id);
        $news->delete();
        return  response()->json([
            'success' => 'Deleted Message Successfully'
        ] , 201 ) ;
    }

    function destroy($id){
        $news = ContactUs::query()->findOrFail($id);
        $news->delete();
        return  response()->json([
            'success' => 'Deleted Contact Successfully'
        ] , 201 ) ;
    }
}
