<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'title',
        'title_ar',
        'slug',
        'description',
        'description_ar',
        'photo',
        'is_featured',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function jobPosts()
    {
        return $this->hasMany(JobPost::class);
    }
}
