<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $fillable = ['title', 'content','image','meta_title','meta_description','meta_keywords','slug'];


    public function olderBlog()
    {
        return Blog::where('created_at', '<', $this->created_at)
        ->orderBy('created_at', 'desc')
        ->firstOrFail();
    }
}
