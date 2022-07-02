<?php
namespace App\Http\Controllers\Customer;
use App\Models\Workspace;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $workspaces = Workspace::get();

        // $workspaces = Workspace::table('workspaces')->get();
        return view('customer.Exploration', compact('workspaces'));
    }

}
