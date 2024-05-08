<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{

    public function favorites()
    {
        $user_id = Auth::id();
        $favoriteRecipeIds = Favorite::where('user_id', $user_id)->pluck('recipe_id');

        $recipes = Recipe::whereIn('id', $favoriteRecipeIds)->get();

        return view('favorites',
            [
                'recipes' => $recipes
            ]);
    }

    public function upload(Request $request)
    {
        $user_id = Auth::id();
        $recipe_id = $request->input('recipe_id');
        $existingFavorite = Favorite::where('user_id', $user_id)
            ->where('recipe_id', $recipe_id)
            ->exists();

        if ($existingFavorite) {
            return back()->withErrors(['error' => 'This recipe is already in your favorites.']);
        }
        $favorite = Favorite::create([
            'user_id' => $user_id,
            'recipe_id' => $recipe_id,
        ]);

        if ($favorite) {
            return redirect()->back()->with('success', 'Like added successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to add like');
        }
    }

    public function destroy($id)
    {
        $user_id = Auth::id();
        $post = Favorite::where('user_id', $user_id)
                        ->where('recipe_id', $id);
        $post->delete();
        return redirect()->route('favorites')
            ->with('success', 'Post deleted successfully');
    }
}
