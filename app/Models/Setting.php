<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone1',
        'email1',
        'address1',
        'phone2',
        'email2',
        'address2',
        'phone3',
        'email3',
        'address3',
        'opining_week_day',
        'closing_week_day',
        'opining_hour',
        'closing_hour',
        'feature1_title',
        'feature1_descr',
        'feature2_title',
        'feature2_descr',
        'feature3_title',
        'feature3_descr',
        'feature4_title',
        'feature4_descr',
        'feature5_title',
        'feature5_descr',
        'feature6_title',
        'feature6_descr',
        'feature1_title_ar',
        'feature1_descr_ar',
        'feature2_title_ar',
        'feature2_descr_ar',
        'feature3_title_ar',
        'feature3_descr_ar',
        'feature4_title_ar',
        'feature4_descr_ar',
        'feature5_title_ar',
        'feature5_descr_ar',
        'feature6_title_ar',
        'feature6_descr_ar',
        'google_map_link',
        'ceo_video_link',
        'facebook_link',
        'twitter_link',
        'linkedin_link',
        'instagram_link',
        'youtube_link',
        'logo1',
        'logo2',
    ];
}
