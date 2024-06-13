<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatePostRequest;
use GuzzleHttp\Psr7\Request as Psr7Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.rating', [
            "title" => "rating",
            "post" => Post::latest()->paginate(1)
        ]);
       
    }

    public function post()
    {
        return view('dashboard.post',[
            "title" => "post",
            "post" => Post::latest()->paginate(1)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'body' => 'required',
            'image' => 'image|file'
        ]);

        if($request->file('image')){
            $validatedData["image"] = $request->file('image')->store('post-image');
        }




        Post::create($validatedData);
        return redirect('/post')->with('success', "Berhasil Terupdate");




    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
