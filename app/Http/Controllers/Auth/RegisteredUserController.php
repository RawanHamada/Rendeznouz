<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Owner;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create($type = 'customer')
    {
        return view('auth.register',compact('type'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        if ($request->type == 'customer') {

            $guardName = 'web';

        } elseif ($request->type == 'owner') {

            $guardName = 'owner';

        }
        // if ( Auth::guard($guardName)) {

            if ($request->type == 'customer') {

                $request->validate([
                    'first_name' => ['required', 'string', 'max:255'],
                    'last_name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'phone_number' => ['required', 'string', 'max:255', 'unique:users'],
                    'password' => ['required', 'confirmed', Rules\Password::defaults()],
                    // 'avatar' => ['required', 'string', 'max:255'],
                ]);
                $user = User::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'phone_number' => $request->phone_number,
                    'password' => Hash::make($request->password),
                    // 'avatar' => $request->phone_number,
                ]);
                event(new Registered($user));
                 Auth::login($user);


            } elseif ($request->type == 'owner') {

                $request->validate([
                    'first_name' => ['required', 'string', 'max:255'],
                    'last_name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'phone_number' => ['required', 'string', 'max:255'],
                    'company_name' => ['required', 'string', 'max:255'],
                    'password' => ['required', 'confirmed', Rules\Password::defaults()],
                ]);
                $owner = Owner::create([
                    'first_name' => $request->first_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'phone_number' => $request->phone_number,
                    'company_name' => $request->phone_number,
                    'password' => Hash::make($request->password),
                ]);
                event(new Registered($owner));
                Auth::login($owner);

            }
        // }else{
        //     return redirect()->back();
        // }

            return redirect()->intended(RouteServiceProvider::HOME);
    }



    }

