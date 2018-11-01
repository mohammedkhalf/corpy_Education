<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table = "cards";

    protected $fillable = ['user_id' , 'course_id' , 'course_name' , 'course_price' , 'center_id'];
    
}
