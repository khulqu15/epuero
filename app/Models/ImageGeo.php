<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageGeo extends Model
{
    use HasFactory;
    protected $table = 'geo_image';
    protected $fillable = [
        'image',
        'label'
    ];    
    protected $hidden = [];
}
