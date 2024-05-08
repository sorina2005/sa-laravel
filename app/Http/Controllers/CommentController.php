<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function show($id)
    {
        $recipe = $id;
        return view('post-create',
        [
            'recipe' => $recipe
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'recipe_id' => 'required', // Add validation rule for recipe_id
        ]);

        $input = $request->all();
        $input['user_id'] = auth()->id();
        $input['recipe_id'] = $request->input('recipe_id'); // Retrieve recipe_id from request
        Comment::create($input);

        return redirect('');
    }

    public function show_comments($id)
    {
        $comments = Comment::where('recipe_id', $id)->select('user_id', 'recipe_id', 'content')->get();
        return view('view-comments', [
            'comments' => $comments,
        ]);
    }

}
