<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::get();
        return view('admin.content.blogs.list',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.content.blogs.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'content' => 'required',
        //     'meta_title' => 'required',
        //     'meta_description' => 'required',
        //     'meta_keywords' => 'required',
        //     'slug' => 'required',
        // ]);

        // return phpinfo();
        $imageName = $request->image->getClientOriginalName();
        $request->image->move(public_path('images/blogs/'), $imageName);

        $author_image = $request->author_image->getClientOriginalName();
        $request->author_image->move(public_path('images/blogs/'), $author_image);

        $store = Blog::create([
            'title' => $request->title,
            'title_description' => $request->title_description,
            'image' => $imageName,
            'author_name' => $request->author_name,
            'author_image' => $author_image,
            'content' => $request->content,
            'main_tag_line' => $request->main_tag_line,
            'content_2' => $request->content_2,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'slug' => $request->slug,
        ]);

        return redirect()->route('blogs.list')->with('success', "Blog added successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.content.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $blog = Blog::find($request->id);
        if($request->file('image')){
            // unlink("images/blogs/".$blog->image);
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path('images/blogs/'), $imageName);
        }else{
            $imageName = $blog->image;
        }

        if($request->file('author_image')){
            // unlink("images/blogs/".$blog->author_image);
            $author_image = $request->author_image->getClientOriginalName();
            $request->author_image->move(public_path('images/blogs/'), $author_image);
        }else{
            $author_image = $blog->author_image;
        }

        $blog->title = $request->title;
        $blog->title_description = $request->title_description;
        $blog->image = $imageName;
        $blog->author_name = $request->author_name;
        $blog->author_image = $request->author_image;
        $blog->content = $request->content;
        $blog->main_tag_line = $request->main_tag_line;
        $blog->content_2 = $request->content_2;
        $blog->meta_title = $request->meta_title;
        $blog->meta_description = $request->meta_description;
        $blog->meta_keywords = $request->meta_keywords;
        $blog->slug = $request->slug;
        // $blog->status = $request->status;
        $blog->save();

        return redirect()->route('blogs.list')->with('success', "Blog updated successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        unlink("images/blogs/".$blog->image);
        unlink("images/blogs/".$blog->author_image);
        $blog->delete();
        return back()->with('success', "Blog Deleted.");
    }

    public function updateStatus(Request $request)
    {
        if(isset($request->id) && isset($request->status)){
            $blog = Blog::find($request->id);
            if($request->status){
                $blog->status = 0;
            }else{
                $blog->status = 1;
            }
            $blog->save();
            if($request->status)
            return back()->with('success','Blog save as draft.');
            else
            return back()->with('success','Blog is published successfully');
        }
        return back()->with('error','Something went wrong');
    }
}
