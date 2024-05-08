<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RecipeController extends Controller
{
    function recipes(): View
    {
        $recipes = Recipe::all();

        return view('recipes',
            [
                'recipes' => $recipes
            ]);
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'title' => 'required|max:255',
            'ingredients' => 'required',
            'instructions' => 'required',
            'image' => 'required',
        ]);

        $request['user_id'] = Auth::id();

        Recipe::create($request->all());

        return redirect()->route('recipes')
            ->with('success', 'Post created successfully.');
    }

    public function update(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'recipeImage' => 'required',
            'title' => 'required|max:255',
            'ingredients' => 'required',
            'instructions' => 'required',
        ]);

        $post = Recipe::find($id);

        $post->update($request->all());

        return redirect()->route('recipes')
            ->with('success', 'Post updated successfully.');
    }

    public function destroy($id): \Illuminate\Http\RedirectResponse
    {
        $post = Recipe::find($id);

        $post->delete();

        return redirect()->route('recipes')
            ->with('success', 'Post deleted successfully');
    }

    public function create(): View
    {
        return view('create');
    }


    public function show($id): View
    {
        $post = Recipe::find($id);

        return view('show',
            [
                'post' => $post
            ]);
    }


    public function edit($id): View
    {
        $post = Recipe::find($id);

        return view('edit',
            [
                'post' => $post
            ]);
    }

    public function view(): View
    {
        return view('view-post');
    }

}
