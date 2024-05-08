<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Nette\Utils\Image;

class ProfileController extends Controller
{


    public function profile()
    {
        $current_userid = Auth()->user()->id;
        $userinfo = User::where('id','=',$current_userid)->first();
        $userprofile = Profile::where('user_id','=',$current_userid)->first();

        return view('profile',compact('userprofile','userinfo'));
    }

    public function updatepic(Request $request){
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $userid = $request['userid'];
            $uploadedfile = time() . $avatar->getClientOriginalName();
            Image::make($avatar)->resize(300, 300)->save( public_path('images/' . $uploadedfile  ) );

            $user = Profile::where('user_id','=',$userid)->first();
            $user->picture =$uploadedfile;
            $user->save();
        }
        return redirect('profile');
    }

    public function updateinfo(Request $request){
        $newmobile = $request['updmobile'];
        $newaddress = $request['updaddress'];
        $userid = $request['userid'];
//todo look here for making the favoriyte page
        $userinfo = Profile::where('user_id','=',$userid)->first();
        $userinfo->mobile =$newmobile;
        $userinfo->address =$newaddress;
        $userinfo->save();
        return redirect('profile');
    }
}
