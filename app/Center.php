<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Center extends Model
{
    protected $table = "centers";

    protected $fillable = ['off_doc'];

    public function user()
    {
    	return $this->belongsTo('\App\User' , 'user_id');
    }
}
