<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


            $blogs = Blog::all();

            return view('blog.index', ['blogs' => $blogs]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            return view('blog.create');
        }
        else{
            return view('errors.notLoggedIn');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (Auth::check()) {
            $this->validate($request, [
                'title' => 'required',
                'post' => 'required',
                'author' => 'required',
            ]);

            $blog = new Blog;
            $blog->title = $request->title;
            $blog->post = $request->post;
            $blog->author = $request->author;
            $blog->views = $request->views=0;
            $blog->save();
            return redirect('blog')->with('message', 'Post został utworzony.');
        }
    else{
        return view('errors.notLoggedIn');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {

        $blog = Blog::find($id);


        if(!$blog){
            abort(404);
        }
        $a = $blog->views;
        $a++;
        DB::table('blog')->update(['views' => $a]);
        return view('blog.details') -> with('detailpage', $blog);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::check()) {
            $blog = Blog::find($id);
            if (!$blog) {
                abort(404);
            }
            return view('blog.edit')->with('detailpage', $blog);
        }
        else{
            return view('errors.notLoggedIn');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Auth::check()) {
            $this->validate($request, [
                'title' => 'required',
                'post' => 'required',
            ]);

            $blog = Blog::find($id);
            $blog->title = $request->title;
            $blog->post = $request->post;
            $blog->save();
            return redirect('blog')->with('message', 'Post został wyedytowany.');
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
    public function destroy($id)
    {
        if (Auth::check()) {
            $blog = Blog::find($id);
            $blog->delete();
            return redirect('blog')->with('message', 'Post został usunięty.');
        }
        else{
            return view('errors.notLoggedIn');
        }
    }
}
