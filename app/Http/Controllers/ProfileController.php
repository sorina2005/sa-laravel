<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Nette\Utils\Image;

class ProfileController extends Controller
{
    public function profile(): View
    {
        $userId = Auth()->id();

        $user = User::where('id', '=', $userId)->first();

        $userProfile = Profile::where('user_id', '=', $userId)->first();

        return view('profile', compact('userProfile', 'user'));
    }

    public function updatePicture(Request $request)
    {
        if ($request->hasFile('picture')) {

            $picture = $request->file('picture');

            $userId = $request['user_id'];

            $uploadedFile = time() . $picture->getClientOriginalName();

            Image::make($picture)->resize(300, 300)->save(public_path('images/' . $uploadedFile));

            $user = Profile::where('user_id', '=', $userId)->first();

            $user->picture = $uploadedFile;

            $user->save();
        }

        return redirect('profile');
    }

    public function updateInfo(Request $request)
    {

        $data = $request->validate([
            'address' => 'required',
            'mobile' => 'required',
        ]);

        $userId = Auth::id();

        Profile::updateOrCreate(
            ['user_id' => $userId],
            $data
        );

        return redirect('profile');
    }
}

//todo make the profile thing work
