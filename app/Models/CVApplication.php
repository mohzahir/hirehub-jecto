<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CVApplication extends Model
{
    use HasFactory;

    protected $table = "cv_applications";

    protected $fillable = [
        'cv_category_id',
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
        'notes',
        'is_replied_to',
    ];


    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
    public function CVCategory()
    {
        return $this->belongsTo(CVCategory::class, 'cv_category_id');
    }
}
