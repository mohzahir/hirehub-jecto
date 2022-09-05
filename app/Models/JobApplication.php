<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_post_id',
        'candidate_id',
        'name',
        'phone',
        'email',
        'cv',
        'payment_time',
        'payment_method',
        'payment_photo',
        'payment_confirmed',
        'paid_amount',
        'paid_currency',
        'cover_letter',
        'is_replied_to',
    ];

    public function jobPost()
    {
        return $this->belongsTo(JobPost::class);
    }

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
