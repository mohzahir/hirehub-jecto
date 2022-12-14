<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_ar',
        'photo',
    ];

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function jobPosts()
    {
        return $this->hasMany(JobPost::class);
    }
}
