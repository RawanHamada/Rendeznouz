<?php


namespace App\Http\Controllers\Customer;
use App\Models\City;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function edit($id)
    {
        $customer = Auth::guard(session('guardName'))->user($id);
        return view('customer.setting',compact('customer'));

    }

    // public function index(){
    //     $cities = City::all();

        // $onwer_id = Auth::guard( session('guardName') )->user()->id;
        // $workspaces = Workspace::where('owner_id', "=" , $onwer_id )->get();
    //     @Auth::check();
    //     $users = User::get();
    //     return view('customer.setting',compact('users'));
    // }
}
