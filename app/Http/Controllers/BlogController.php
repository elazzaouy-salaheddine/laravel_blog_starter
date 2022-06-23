<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use App\Models\Category;
use Image;
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
        $categories = Category::all();
        return view('blog.index', compact('blogs','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('blog.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)
    {
       // Blog::create($request->validated());
               // validate the data
        $this->validate($request, array(
                'title'         => 'required|max:255',
                'category_id'   => 'required|integer',
                'body'          => 'required'
            ));

        // store in the database
        $post = new Blog;

        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->body = $request->body;
        if ($request->hasFile('featured_img')) {
            $image = $request->file('featured_img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            $post->image = $filename;
          }
        $post->save();
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('blog.edit', compact('blog'))->withCategories($categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogRequest  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        //$blog->update($request->only(['title','body','category_id']));
        //dd($request->only(['title','body','category_id']));

        // $data = $request->only(['title','body','published_at','category_id']);

    
        // $blog->update($data);
        $blog->title = $request->title;
        $blog->category_id = $request->category_id;
        $blog->body = $request->body;
        if ($request->hasFile('featured_img')) {
            $image = $request->file('featured_img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(800, 400)->save($location);
            $blog->image = $filename;
          }
        $blog->save();
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

 

        return redirect()->route('blog.index');
    }

    public function postsindex()
    {
        $blog = Blog::all();
        return view('frontend.posts', compact('blog'));
    }

    public function postsindexshow(Blog $blog)
    {
    
        return view('frontend.postsshow', compact('blog'));
    }
}
