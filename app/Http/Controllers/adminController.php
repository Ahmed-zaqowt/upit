<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    function index(){
        $roles = Role::all() ;
        $users = User::query()->where('status' , '<>' , 'user')->get();
        return view('admin.admin.index' , compact('users' , 'roles'));
    }
}
