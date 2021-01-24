<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ProfielController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index()
    {
        $profile = User::where('id', Auth::id())->first();

        return view('profile', ['profile' => $profile]);
    }

    function editProfile()
    {
        $profile = User::where('id', Auth::id())->first();

        return view('editProfile', ['profile' => $profile]);

    }

    public function postEditProfile(Request $req)
    {


        $validated = $req->validate([
            'name' => ['required','string','max:255'],
        ]);

        $profile = User::find($req->input('id'));


        $profile->name = $req->input('name');//get input from form

        $profile->save(); //save in the DB


        return redirect()->route('profile');


    }

    public function deleteProfile() {

        $user = User::find(Auth::user()->id);
        Auth::logout();

        if ($user->delete()) {

             return redirect()->route('home')->with('global', 'Your account has been deleted!');
        }

}



}