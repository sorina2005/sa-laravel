<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        $userNamed = User::where('name', '=', 'Ciobanu Sorina')->get();
//        foreach ($users as $user){
//            dd($user->email);
//        }
//        dd($users);
        return view('home', [
            'users' => $users,
            'userSorina' => $userNamed
            ]);
    }
}
