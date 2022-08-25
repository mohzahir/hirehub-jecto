<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_post_id',
        'user_id',
        'name',
        'phone',
        'email',
        'cv',
        'cover_letter',
        'is_replied_to',
    ];
}
