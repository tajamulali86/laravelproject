<?php

namespace App\Http\Controllers;

use App\Models\MyPost;
use Illuminate\Http\Request;

class MyPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts=MyPost::all();
        return view('blogs.index', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blogs.create');
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
        $newPost = MyPost::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => 1

        ]);
        return redirect('post/' . $newPost->id);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MyPost  $myPost
     * @return \Illuminate\Http\Response
     */
    public function show(MyPost $myPost)
    {
        //
        return view('blogs.show', ['post'=>$myPost]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MyPost  $myPost
     * @return \Illuminate\Http\Response
     */
    public function edit(MyPost $myPost)
    {
        //
    return view('blogs.edit', ['post'=>$myPost]) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MyPost  $myPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MyPost $myPost)
    {
        //
        $myPost->update([
            'title'=> $request->title,
            'body'=> $request->body,

        ]);
        return redirect('post/'.$myPost->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MyPost  $myPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyPost $myPost)
    {
        //
        $myPost->delete();
        return redirect('/post');
    }
}
