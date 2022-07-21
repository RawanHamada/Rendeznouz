<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalenderController extends Controller
{
    public function index(){
        return view('livewire.calendar');
        // return view('owner.workspace.calender');
    }
}
