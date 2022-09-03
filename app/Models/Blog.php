<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'user_id',
        'title',
        'title_ar',
        'content',
        'content_ar',
        'keywords',
        'photo',
        'is_featured',
        'status',
    ];

    public function comments()
    {
        return $this->hasMany(BlogComment::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function nextBlog()
    {
        return Blog::where('id', $this->id + 1)->first();
    }
    public function previousBlog()
    {
        return Blog::where('id', $this->id - 1)->first();
    }
}
