<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkshopApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'running_workshop_id',
        'candidate_id',
        'name',
        'phone',
        'email',
        'payment_time',
        'payment_method',
        'payment_photo',
        'payment_confirmed',
        'paid_amount',
        'paid_currency',
        'notes',
        'is_replied_to',
    ];

    public function runningWorkshop()
    {
        return $this->belongsTo(RunningWorkshop::class, 'running_workshop_id', 'id');
    }
}
