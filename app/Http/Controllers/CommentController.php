<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CommentController extends Controller
{
    public function show($id): View
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
            'recipe_id' => 'required',
        ]);

        $input = $request->all();

        $input['user_id'] = auth()->id();

        $input['recipe_id'] = $request->input('recipe_id');

        Comment::create($input);

        return redirect('/');
    }

//todo camelcase methods
    public function showComments($id): View
    {
        $comments = Comment::where('recipe_id', $id)
            ->select('user_id', 'recipe_id', 'content')
            ->get();

        return view('view-comments', [
            'comments' => $comments,
        ]);
    }

}
