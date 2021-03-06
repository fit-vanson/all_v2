<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sites extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'site_app_name',
        'ad_switch',
        'site_web',
        'site_package',
        'site_image',
        'site_logo_url',
        'site_feature_images',
        'site_header_title',
        'site_header_content',
        'site_body_title',
        'site_body_content',
        'site_footer_title',
        'site_footer_content',
        'site_policy',
        'site_ads',
        'site_direct_link',
        'site_view_page',
        'load_view_by',
        'load_categories',
        'load_wallpapers_category',
        'site_type_ads',
        'site_chplay_link',
        'site_oppo_link',
        'site_vivo_link',
        'site_xiaomi_link',
        'site_huawei_link',
    ];

//    public function categories()
//    {
//        return $this->belongsToMany(Categories::class, CategoriesHasSites::class, 'site_id', 'category_id')->withPivot('site_image');
//    }

    public function categories()
    {
        return $this->hasMany(Categories::class,'site_id');
    }

    public function list_ips()
    {
        return $this->hasMany(ListIP::class, 'id_site');
    }

    public function visitors()
    {
        return $this->belongsToMany(Visitors::class, VisitorFavorite::class, 'site_id', 'visitor_id');
    }




}
