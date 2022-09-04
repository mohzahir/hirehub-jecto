<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CVCategory extends Model
{
    use HasFactory;

    protected $table = "cv_categories";
    protected $fillable = [
        'title',
        'title_ar',
        'cv_price_sdg',
        'cv_price_dollar',
        'slug',
        'features',
        'features_ar',
        'is_featured',
        'status',
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
