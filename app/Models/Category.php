<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'title_ar',
        'slug',
        'summary',
        'summary_ar',
        'is_featured',
        'status',
        'photo',
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
    public function jobPosts()
    {
        return $this->hasMany(JobPost::class);
    }
}
