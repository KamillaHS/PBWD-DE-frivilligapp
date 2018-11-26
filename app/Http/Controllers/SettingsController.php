<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    public function edit()
    {

        // Check for correct user
        if(!auth()->user()) {
            return redirect('/')->with('error', 'Unauthorized Page');
        }

        $user = User::find(Auth::id());


        return view('edit')->with('user', $user);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $user =User::find(Auth::id());
        $user->name = $request->input('name');
        $user->save();

        return redirect("/dashboard")->with('success', 'Profil opdateret');
    }
}
