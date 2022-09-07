<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Workshop;

class RunningWorkshop extends Model
{
    use HasFactory;

    protected $fillable = [
        'workshop_id',
        'price_sdg',
        'price_dollar',
        'start_date',
        'finish_date',
        'shown',
        'lecture_hours',
        'total_hours',
        'location',
    ];

    public function workshop()
    {
        return $this->belongsTo(Workshop::class, 'workshop_id', 'id');
    }
}
