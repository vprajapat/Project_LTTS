<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trains_schedule extends Model
{
    use HasFactory;

    protected $table = 'trains_schedule';
    protected $primaryKey ='trains_schedule_id';

     
    public function showtrain(){
        return $this->belongsTo(Train::class,'train_id','train_id');
    }
    public function showstartstation(){
        return $this->belongsTo(Station::class,'station_id','station_id');
    }
    
    public function showendstation(){
        return $this->belongsTo(Station::class,'end_station_id','station_id');
    }

}
