<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Workspace;
use App\Models\Owner;
use App\Models\Tainant;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        $workspaces = Workspace::get();
        $owners = Owner::get();
        $users = User::get();
        $tainants = Tainant::get();

        return view('admin.index' , compact('workspaces','owners','users', 'tainants'));
    }
}
