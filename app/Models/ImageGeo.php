<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ImageGeo extends Model
{
    use HasFactory;
    protected $table = 'geo_image';
    protected $fillable = [
        'image',
        'label'
    ];

    static function getLastImage() {
        $result = DB::getPdo()->lastInsertId();
        return $result;
    }
    protected $hidden = [];
}
