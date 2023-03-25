<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home()
    {
        $blogs = Blog::limit(5)->get();
        return view('frontend.content.home',compact('blogs'));
    }
    public function privacy(){
        return view('frontend.content.priavcy-policy');
    }
    public function getBlog($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $oldBlog=Blog::where('created_at','<',$blog->created_at)->orderBy('created_at','desc')->first();

        $blogs = Blog::where('id','!=',$blog->id)->get();
        // return $blog;
        return view('frontend.content.blog-page',compact('blog','blogs','oldBlog'));
    }

    public function contactUs(Request $request)
    {
        return view('frontend.content.contact-us');
    }
}
