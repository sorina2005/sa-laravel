<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\User;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $users = User::all();

        $recipes = Recipe::all();

        return view('home', [
            'users' => $users,
            'recipes' => $recipes
        ]);
    }
}
