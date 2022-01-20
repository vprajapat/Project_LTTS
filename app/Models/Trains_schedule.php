<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trains_schedule extends Model
{
    use HasFactory;

    protected $table = 'trains_schedule';
    protected $primaryKey ='trains_schedule_id';
}
