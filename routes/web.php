<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Owner\OwnerController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Owner\WorkspacesController;
use App\Http\Controllers\Owner\SettingOwnerController;
use App\Http\Controllers\Owner\CalenderController;
use App\Http\Controllers\Owner\WorkspaceRentingController;
use App\Http\Controllers\Owner\TainentController;
use App\Http\Controllers\Customer\CustomerWorkspaceController;
use App\Http\Controllers\Customer\SettingController;
use App\Http\Controllers\Customer\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



// Owner Routes [ Namespace => app\Http\Controllers\Owner ]
Route::namespace('/Owner')
    ->middleware(['auth:owner'])
    ->group(function() {

        // Start Owner Controller [Homepage]
        Route::get('/owner', [OwnerController::class, 'index'])->name('owner.home');
        // End Owner Controller [Homepage]

        // Start Workspace Routes
        Route::group([
            'prefix' => '/workspace',
            'as' => 'workspace.',
        ], function() {
            Route::get('/', [WorkspacesController::class, 'index'])->name('index');
            Route::get('/create', [WorkspacesController::class, 'create'])->name('create');
            Route::get('/{id}/edit', [WorkspacesController::class, 'edit'])->name('edit');
            Route::put('/{id}', [WorkspacesController::class, 'update'])->name('update');
            Route::delete('/{id}', [WorkspacesController::class, 'destroy'])->name('destroy');
            Route::get('/calender', [CalenderController::class, 'index'])->name('calender');
            Route::post('/', [WorkspacesController::class, 'store'])->name('store');
            Route::get('/renting', [WorkspaceRentingController::class, 'index'])->name('rent');
        });
         // End Workspace Routes
         // Start Setting Routes

        Route::group([
            'prefix' => '/owner',
            'as' => 'owner.',
        ], function() {
            Route::get('/{id}/setting', [SettingOwnerController::class, 'edit'])->name('setting');
            Route::put('/{id}', [SettingOwnerController::class, 'update'])->name('update');

        });
     // End Setting Routes



    });

        Route::group([
            'prefix' => 'owner',
            'as' => 'owner.',
        ], function() {
            // Another Routes
        });



// Customer Routes [ Namespace => app\Http\Controllers\Customer ]
Route::namespace('/Customer')
->middleware(['auth:web'])
->group(function() {

    // Start Customer Controller [Homepage]
    Route::get('/customer', [CustomerController::class, 'index'])->name('customer.home');
    // End Customer Controller [Homepage]


     // Start Customer Workspace
     Route::group([
        'prefix' => 'my-workspaces',
        'as' => 'my-workspaces.',
    ], function() {
        Route::get('/', [CustomerWorkspaceController::class, 'index'])->name('index');
        Route::get('/{id}', [CustomerWorkspaceController::class, 'show'])->name('show');
        Route::post('/getDays', [CustomerWorkspaceController::class, 'getDays'])->name('getDays');
    });
    // End Customer Workspace

    Route::group([
        'prefix' => 'customer',
        'as' => 'customer.',
    ], function() {
       // Start Customer Controller [My Workspace]
         Route::get('/customer2', [CustomerWorkspaceController::class, 'index'])->name('show');
        // End Customer Controller [My Workspace]
        Route::get('/{id}', [CustomerWorkspaceController::class, 'show'])->name('showWorkspace');

       // Start Customer Controller [Setting]
         Route::get('/{id}/setting', [SettingController::class, 'edit'])->name('setting');
        // End Customer Controller [Setting] '
    });

});

// Start Tainents Route
Route::group([
    'prefix' => '/tainent',
    'as' => 'tainent.',
], function() {
    Route::get('/', [TainentController::class, 'index'])->name('index');
    Route::get('/create', [TainentController::class, 'create'])->name('create');
    Route::post('/', [TainentController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [TainentController::class, 'edit'])->name('edit');
    Route::put('/{id}', [TainentController::class, 'update'])->name('update');
    Route::delete('/{id}', [TainentController::class, 'destroy'])->name('delete');
});
// End Tainents Route


// Admin Routes [ Namespace => app\Http\Controllers\Admin ]
Route::namespace('/Admin')
->middleware(['auth:admin'])
->group(function() {

    // Start Admin Controller [Homepage]
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.home');
    // End Admin Controller [Homepage]


    Route::group([
        'prefix' => 'admin',
        'as' => 'admin.',
    ], function() {
                // require __DIR__.'/auth.php';

       // Start Admin Controller []
        //  Route::get('/admin2', [AdminController::class, 'index'])->name('show');
        // End Admin Controller ]

    });

});




