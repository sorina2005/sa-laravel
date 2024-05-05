<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    function recipes()
    {
        return view('recipes');
    }
}
