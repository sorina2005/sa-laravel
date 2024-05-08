<?php
//TOTO profile
namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class UserController extends Controller
{
    public function login(): View
    {
        return view('login');
    }

    public function authenticate(Request $request): \Illuminate\Http\RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended();
        } else {
            return back()->withErrors([
                'email' => 'Invalid credentials',
            ])->withInput($request->except('password'));
        }
    }

//TODO make errors in login look ok
    public function register(): View
    {
        return view('register');
    }

    public function create(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password'
        ]);

        $credentials['password'] = bcrypt($credentials['password']);

        $user = User::create($credentials);

        if (Auth::attempt($credentials)) {
            return redirect()->intended();
        }

        $getuserid = $user->id;

        $createprofile = new Profile();

        $createprofile->user_id = $getuserid;

        $createprofile->save();

    }

    public function logout(): \Illuminate\Http\RedirectResponse
    {
        auth()->logout();

        return redirect()->route('home');
    }


}
