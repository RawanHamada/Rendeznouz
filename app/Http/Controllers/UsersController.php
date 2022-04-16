<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    //  Actions
    public function index(){
        //read
        $entries = DB::table('datausers')->first();
        // $users = datauser::get();
        return view('owner-login');
    }
    public function create(){

    }
    public function store(){
        
    }
}
