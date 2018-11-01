<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\OrderDetails;

class Order extends Model
{
   protected $table ="orders";

   protected $fillable = ['customer_id' , 'payment_id' , 'order_total' , 'order_stauts' , 'course_image'];

   public function order_detail ()
   {
   	   return  $this->hasMany('App\OrderDetails' ,  'order_id');
   }


}
