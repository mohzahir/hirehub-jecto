<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RunningWorkshop;

class Workshop extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'title_ar',
        'description',
        'description_ar',
        'slug',
        'img',
        'video',
        'trainer_name',
        'trainer_name_ar',
        'trainer_job_title',
        'trainer_job_title_ar',
        'trainer_img',
        'trainer_descr',
        'trainer_descr_ar',
        // 'outcome',
    ];

    public function runningWorkshops()
    {
        return $this->hasMany(RunningWorkshop::class, 'workshop_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
