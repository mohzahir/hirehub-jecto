<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPost extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_id',
        'city_id',
        'country_id',
        'category_id',
        'title',
        'title_ar',
        'slug',
        'short_descr',
        'short_descr_ar',
        'descr',
        'descr_ar',
        'salary_from',
        'salary_to',
        'experience',
        'duration',
        'job_type',
        'is_featured',
        'status',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function job()
    {
        return $this->belongsTo(Job::class);
    }
    public function jobApplications()
    {
        return $this->hasMany(JobApplication::class);
    }
}
