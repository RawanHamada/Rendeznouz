<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Owner\OwnerController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Owner\WorkspacesController;
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
            Route::get('/setting', [WorkspacesController::class, 'setting'])->name('setting');
            Route::post('/', [WorkspacesController::class, 'store'])->name('store');
        });
        // End Workspace Routes

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

    Route::group([
        'prefix' => 'customer',
        'as' => 'customer.',
    ], function() {
        // Another Routes
    });

});

