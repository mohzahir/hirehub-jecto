<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CVSample extends Model
{
    use HasFactory;
    protected $table = 'cv_samples';
    protected $fillable = [
        'title',
        'title_ar',
        'cv_category_id',
        'photo',
        'pdf',
    ];

    public function CVCategory()
    {
        return $this->belongsTo(CVCategory::class, 'cv_category_id', 'id');
    }
}
