<?php
namespace App\Http\Controllers\Customer;
use App\Models\Workspace;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){

        $request = request();

        $name = $request->query('name');
        $workspace_id = $request->query('workspace');

        $perpage = $request->query('perpage');

         if($name) {
            $workspaces = Workspace::where('name' ,'LIKE' , '%{$name}%');
        }
        // if($workspace_id){

        // }
        if($perpage == 'all'){
            $customers = Workspace::all();
        } else{
            $customers = Workspace::paginate($perpage);
        }

        // $model = User::with('workspace');
        // if($name) {
        //     $model->where('name' ,'LIKE' , '%{$name}%');
        //     // dd(request()->query('search'));
        // }
        // if($workspace_id) {
        //     $model->where('workspace_id' ,'=' , $workspace_id);
        // }
        // if($perpage == 'all'){
        //     $customers = $model->get();
        // } else{
        //     $customers = $model->paginate($perpage);
        // }
        // if($perpage && $perpage !== 'all'){

        // }

        // $search = request()->query('search');

        //first sol
        // if($search) {
        //     $workspaces = Workspace::where('name' ,'LIKE' , '%{$search}%')->simplePaginate(3);
        //     // dd(request()->query('search'));
        // } else{
        //     $workspaces = Workspace::simplePaginate(3);
        // }

        $workspaces = Workspace::get();

        // $workspaces = Workspace::table('workspaces')->get();
        return view('customer.Exploration', compact('workspaces','name','workspace_id','customers'));
    }

}
