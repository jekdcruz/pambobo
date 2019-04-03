<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; //eloquent
use DB; //import db library from manual SQL query

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {       
        //TO SELECT ALL
        //$posts = Post::all();
        //TO SELECT WITH ORDER

        $posts = Post::orderBy('title', 'desc')->get();

        //TAKE NUMBER BASED TO ARRAY. PARANG LIMIT 1,2,3 sa sql
        //$posts = Post::orderBy('title', 'desc')->take(1)->get();

        //TO SELECT WITH WHERE
        //return Post::where('title', 'Sunflower')->get();

        //DB MANUAL SQL QUERY
        //$posts = DB::select('SELECT * FROM posts');

        //PAGINATION
         $posts = Post::orderBy('title', 'desc')->paginate(10);

        return view('posts.index')->with('posts', $posts); //last param will be the one to call
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post); //last param will be the one to call
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
