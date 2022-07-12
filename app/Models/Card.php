<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;

class Card extends Model
{
    use HasFactory;
    // protected $fillable=[
    //     'uid',
    //     'vehicle_id',
    //     'Balance',
    //     'amount'
    // ];


    public function vehicle_lesson(){

        return $this->belongsTo(Vehicle::class,'vehicle_id','id');
    }
}
