<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class githubController extends Controller
{
    function  redirect(){
        return Socialite::driver('github')->redirect();

    }

    function callbackGithub(){
        try {
            $github_user = Socialite::driver("github")->user();

            // dd($github_user );
            $user= User::where('github_token',$github_user->getId())->first();

            if(! $user){
            $Add_user=User::create([
                "name"=>$github_user->nickname,
                "email"=>$github_user->getEmail(),
                "github_id"=>$github_user->getId(),
                "github_token"=>$github_user->token,
                "refreshToken"=>$github_user->refreshToken,
            ]);
            Auth::login($Add_user);
                return redirect()->intended('dashboard');
            }
            else{
                Auth::login($user);
                return redirect()->intended('dashboard');

            }


        } catch (\Throwable $th) {

            dd('eruur'.$th->getMessage());
        }
    }

}
