<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class FavoriteController extends Controller
{

    public function favorites(): View
//    todo return view
    {
        $userId = Auth::id();

        $favoriteRecipeIds = Favorite::where('user_id', $userId)->pluck('recipe_id');

        $recipes = Recipe::whereIn('id', $favoriteRecipeIds)->get();

        return view('favorites',
            [
                'recipes' => $recipes
            ]);
    }

    public function upload(Request $request): \Illuminate\Http\RedirectResponse
    {
        $userId = Auth::id();

        $recipeId = $request->input('recipe_id');

        $isFavorite = Favorite::where('user_id', $userId)
            ->where('recipe_id', $recipeId)
            ->exists();

        if ($isFavorite) {
            return back()->withErrors(['error' => 'This recipe is already in your favorites.']);
        }

        $favorite = Favorite::create([
            'user_id' => $userId,
            'recipe_id' => $recipeId,
        ]);

        if ($favorite) {
            return redirect()->back()->with('success', 'Like added successfully');
        } else {
            return redirect()->back()->with('error', 'Failed to add like');
        }
    }

    public function destroy($id)
    {
        $userId = Auth::id();

        $post = Favorite::where('user_id', $userId)
            ->where('recipe_id', $id);

        $post->delete();

        return redirect()->route('favorites')
            ->with('success', 'Post deleted successfully');
    }
}
