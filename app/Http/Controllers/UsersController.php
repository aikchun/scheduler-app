<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use \DB;

class UsersController extends Controller
{
    //
    /**
    * Show list of users
    */
    public function index()
    {
        $users = DB::table('users')->paginate(10);
        return view('users.index', compact('users'));
    }
    
}