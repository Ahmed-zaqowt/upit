<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacant extends Model
{
    use HasFactory;
    protected $guarded = [] ;

    function user(){
        return $this->belongsTo(User::class );
    }

    function career(){
        return $this->belongsTo(Career::class );
    }
}
