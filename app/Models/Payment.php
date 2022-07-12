<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Card;

class Payment extends Model
{
    // use HasFactory;
     protected $fillable=[
        'amount',
         'status',
         'uid_id',
     ];

    public function Card_id(){

        return $this->belongsTo(Card::class,'uid_id','uid');
    }
}
