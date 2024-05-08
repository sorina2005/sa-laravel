<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    function recipes()
    {
        $recipes = Recipe::all();

        return view('recipes',
            [
                'recipes' => $recipes
            ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'ingredients' => 'required',
            'instructions' => 'required',
            'image' => 'required'
        ]);
        Recipe::create($request->all());
        return redirect()->route('recipes')
            ->with('success', 'Post created successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required',
            'title' => 'required|max:255',
            'ingredients' => 'required',
            'instructions' => 'required',
        ]);
        $post = Recipe::find($id);
        $post->update($request->all());
        return redirect()->route('recipes')
            ->with('success', 'Post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        $post = Recipe::find($id);
        $post->delete();
        return redirect()->route('recipes')
            ->with('success', 'Post deleted successfully');
    }
    // routes functions

    /**
     * Show the form for creating a new post.
     *
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        $post = Recipe::find($id);
        return view('show',
            [
                'post' => $post
            ]);
    }

    /**
     * Show the form for editing the specified post.
     *
     */
    public function edit($id)
    {
        $post = Recipe::find($id);
        return view('edit',
            [
                'post' => $post
            ]);
    }

    public function view()
    {
        return view('view-post');
    }

}
