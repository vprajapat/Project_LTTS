<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Intermediate_station extends Model
{
    use HasFactory;
    protected $table = 'intermediate_stations';
    protected $primaryKey = 'inter_station_id';

    public function showstation(){
        return $this->belongsTo(Station::class,'station_id','station_id');
    }




}
