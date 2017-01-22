<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
    public function edit()
    {
        if (Auth::check()) {

            $user = User::find(Auth::user()->id);
            if (!$user) {
                abort(404);
            }
            return view('user.profile')->with('useredit', $user);
        }
        else{
            return redirect('/')->with('error', 'Nie masz dostępu do tej strony.');
        }
    }

//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
    public function update(Request $request)
    {
        if (Auth::check()) {
            $this->validate($request, [
                'email' => 'required|max:100',
//                'old_password' => 'max:50',
//                'new_password' => 'max:50',
//                'confirm_password' => 'max:50',
                'firstname' => 'required|max:50',
                'surname' => 'required|max:50',
                'country' => 'max:50',
                'city' => 'max:50',
                'age' => 'max:20',
                'gender' => 'required|max:10',
                'education' => 'max:50',
                'interests' => 'max:100',
                'about_me' => 'max:300',
            ]);

            $user = User::find(Auth::user()->id);

            $user->firstname = $request->firstname;
            $user->surname = $request->surname;
            $user->country = $request->country;
            $user->city = $request->city;
            $user->age = $request->age;
            $user->gender = $request->gender;
            $user->education = $request->education;
            $user->interests = $request->interests;
            $user->about_me = $request->about_me;

            $user->save();
            return redirect('user/profile')->with('message', 'Zmiany zostały zapisane.');
        }
        else{
            return redirect('/')->with('error', 'Nie masz dostępu do tej strony.');
        }
    }
}
