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
        if ($blogs->count() < 1) {

            return view('blog.index', ['blogs' => $blogs]);

        } else {
            $a = $blogs->last()->id;
            $a -= 5;
            return view('blog.index', ['blogs' => $blogs], ['a' => $a]);
        }


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
        } else {
            return redirect('/')->with('error', 'Nie masz dostępu do tej strony.');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (Auth::check()) {
            $this->validate($request, [
                'title' => 'required',
                'post' => 'required'
            ]);

            $blog = new Blog;
            $blog->title = $request->title;
            $blog->post = $request->post;
            if(Auth::user()->firstname == '' || Auth::user()->surname == '' )
                if(Auth::user()->email = 'admin@admin.com')
                    $blog->author = 'Administrator';
                else
                    $blog->author = 'Nieznany';
            else
                $blog->author = Auth::user()->firstname . ' ' . Auth::user()->surname;
            $blog->views = 0;
            $blog->save();
            return redirect('/')->with('message', 'Post został dodany poprawnie.');
        } else {
            return redirect('/')->with('error', 'Nie masz dostępu do tej strony.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {

        $blog = Blog::find($id);
        if (!$blog) {
            abort(404);
        } else {
            $a = $blog->views;
            $a++;
            DB::table('blog')->update(['views' => $a]);
            $blog = Blog::find($id);
            return view('blog.details')->with('detailpage', $blog);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
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
        } else {
            return redirect('/')->with('error', 'Nie masz dostępu do tej strony.');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
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
            return redirect('/')->with('message', 'Post został wyedytowany.');
        } else {
            return redirect('/')->with('error', 'Nie masz dostępu do tej strony.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::check()) {
            $blog = Blog::find($id);
            $blog->delete();
            return redirect('/')->with('message', 'Post został usunięty.');
        } else {
            return redirect('/')->with('error', 'Nie masz dostępu do tej strony.');
        }
    }
}
