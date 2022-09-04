<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CVApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'cv_category_id',
        'candidate_id',
        'name',
        'phone',
        'email',
        'cv',
        'payment_time',
        'payment_method',
        'paid_amount',
        'paid_currency',
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
