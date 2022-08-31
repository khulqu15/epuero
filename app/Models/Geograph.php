<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Geograph extends Model
{
    use HasFactory;
    protected $table = 'geograph';
    protected $fillable = [
        'location_name',
        'image_id'
    ];
    
    static function getGeograph() {
        $result=DB::table('geograph')
        ->join('geo_image','geograph.image_id','=','geo_image.id');
        return $result;
    }

    protected $hidden = [];
}
