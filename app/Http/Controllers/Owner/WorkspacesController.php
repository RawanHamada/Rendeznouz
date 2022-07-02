<?php
namespace App\Http\Controllers\Owner;

use App\Models\City;
use App\Models\Workspace;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Storage;


class WorkspacesController extends Controller
{
    public function index()
    {
        $onwer_id = Auth::guard( session('guardName') )->user()->id;
        $workspaces = Workspace::where('owner_id', "=" , $onwer_id )->get();
        return view('owner.workspace.index', compact('workspaces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $cities = City::all();
        $features = DB::table('features')->get();
        $workspace = DB::table('workspaces')->get();
        return view('owner.workspace.create', compact('cities','workspace','features'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'description' => ['required', 'min:20', 'max:250'],
            'city_id' => ['required'],
            'location' => ['required'],
            'type' => ['required'],
            'price' => ['required', 'numeric'],
            'gallery' => ['nullable'],
            'features' => ['required'],
        ]);

        // Uploads Multi-image For image folder
        $img_path = null;

        if ($request->hasFile('gallery')) {
            $files = $request->file('gallery'); // Uploaded File Objects

            foreach ($files as $file) {
                // $filename= date('YmdHi').$file->getClientOriginalName();
                // $file-> move(public_path('public/Image'), $filename);
                // $img_path['image']= $filename;

                $img_path = $file->store('/', [
                    'disk' => 'gallery',
                ]);

                $image[] = $img_path;
                // implode(",",$image);
            }

        }else{
            $img_path = null;
        }

        $workspace = Workspace::create([
            'name' => $request->name,
            'description' => $request->description,
            'location' =>$request->location,
            'city_id' => $request->city_id,
            'type' => $request->type,
            'price' => $request->price,
            'rating' => 0,
            'gallery' => $image,
            'features' => $request->features,
            'status' => 'Available',
            'owner_id' => Auth::guard(session('guardName'))->user()->id,
        ]);

        toastr()->success('Workspace Successfully Created');

        return redirect()->route('workspace.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $workspace = Workspace::findOrfail($id);
        // $workspace = DB::table('workspaces')->get();
        $cities = City::all();
        return view('owner.workspace.edit',compact('workspace','cities'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $workspace = Workspace::findOrfail($id);
        $workspace->name =$request->name;
        $workspace->description =$request->description;
        $workspace->city_id =$request-> city_id;
        $workspace->type =$request-> type;
        $workspace->price =$request-> price  ;
        $workspace->gallery =$request->gallery;
        $workspace->features =$request-> features;
        $workspace->save();

        return redirect()->route('workspace.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Workspace::destroy($id);

        return redirect()->route('workspace.index');

    }

    // public function setting(Request $request)
    // {
    //     // $owners =auth()->guard(session('guardName'))->user();

    //     // $owners = Auth::guard('owner');
    //     $cities = City::all();

    //     @Auth::check();
    //     $owners = DB::table('owners')->get();

    //     return view('owner.workspace.settings',compact('owners','cities'));
    // }

}
