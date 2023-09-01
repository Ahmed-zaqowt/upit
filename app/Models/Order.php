<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [] ;
    const canceled = 4 ;
    const completed = 3 ;
    const processing = 2 ;
    const pending = 1 ;

    function service(){
        return $this->belongsTo(Service::class) ;
    }

    function user(){
        return $this->belongsTo(User::class) ;
    }
}
