
@extends('admin.index')

@section('admin-content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8 offset-2">
                    <h2>Edit Blog</h2>
                    <form action="{{route('blogs.update')}}" method="post" id="add-blogs-form" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$blog->id}}">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" required value="{{$blog->title}}">
                            </div>
                            <div class="form-group">
                                <label for="">Title Description</label>
                                <textarea name="title_description" class="form-control" cols="30" rows="3" required placeholder="Add Blog Meta Description">{{$blog->title_description}}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Feature Image</label>
                                <input type="file" name="image" class="form-control" accept="image/*" required>
                            </div>
                            <div class="form-group">
                                <label>Author Name</label>
                                <input type="text" name="author_name" class="form-control" value="{{$blog->author_name}}" required placeholder="Add Author Title">
                            </div>
                            <div class="form-group">
                                <label>Author Image</label>
                                <input type="file" name="author_image" class="form-control" accept="image/*" required>
                            </div>
                            <div class="form-group">
                                <label for="">Body Content</label>
                                <textarea class="textarea" name="content" placeholder="Place some text here"
                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$blog->content}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Main Tag Line</label>
                                <input type="text" name="main_tag_line" class="form-control" value="{{$blog->main_tag_line}}" required placeholder="Add Blog Meta Title">
                            </div>
                            <div class="form-group">
                                <label for="">Body Content</label>
                                <textarea class="textarea" name="content_2" placeholder="Place some text here"
                                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$blog->content_2}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" required placeholder="Add Blog Meta Title">{{$blog->meta_title}}
                            </div>
                            <div class="form-group">
                                <label for="">Meta Description</label>
                                <textarea name="meta_description" class="form-control" cols="30" rows="3" required placeholder="Add Blog Meta Description">{{$blog->meta_description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Meta Keywords</label>
                                <textarea name="meta_keywords" class="form-control" cols="30" rows="3" required placeholder="Add Blog Meta Keywords">{{$blog->meta_keywords}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" name="slug" class="form-control" value="{{$blog->slug}}" required placeholder="Add Blog Slug">
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary" type="submit">Update</button>
                                <a href="{{route('blogs.list')}}" class="btn btn-warning">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

