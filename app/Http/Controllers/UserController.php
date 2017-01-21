<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        //
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        //
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
//    {
//
//        if (Auth::check()) {
//
//            $this->validate($request, [
//                'title' => 'required',
//                'post' => 'required',
//                'name' => 'required',
//                'email' => 'required',
//                'password' => 'required',
//                'confirm_password' => 'required',
//                'firstname' => 'required',
//                'surname' => 'required',
//                'country' => 'required',
//                'city' => 'required',
//                'age',
//                'gender',
//                'education',
//                'interests',
//                'about_me'
//            ]);
//
//            $blog = new Blog;
//            $blog->title = $request->title;
//            $blog->post = $request->post;
//            $blog->author = Auth::user()->firstname.' '.Auth::user()->surname;
//            $blog->views = 0;
//            $blog->save();
//            return redirect('blog')->with('message', 'Post został dodany poprawnie.');
//        }
//        else{
//            return view('errors.notLoggedIn');
//        }
//    }

//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function show(Request $request,$id)
//    {
//        //
//    }

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
            return view('errors.notLoggedIn');
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
//            $this->validate($request, [
//                'name' => 'required|max:30',
//                'email' => 'required|max:100',
//                'old_password' => 'max:50',
//                'new_password' => 'max:50',
//                'confirm_password' => 'max:50',
//                'firstname' => 'required|max:50',
//                'surname' => 'required|max:50',
//                'country' => 'max:50',
//                'city' => 'max:50',
//                'age' => 'max:3',
//                'gender' => 'max:10',
//                'education' => 'max:50',
//                'interests' => 'max:100',
//                'about_me' => 'max:300',
//            ]);

            $user = User::find(Auth::user()->id);

//            $user->name = $request->name;
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
            //return redirect('user/profile')->with('message', 'Edycja powiodła się.');
            return redirect('user/profile');
        }
        else{
            return view('errors.notLoggedIn');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function destroy($id)
//    {
//        //
//    }
}
