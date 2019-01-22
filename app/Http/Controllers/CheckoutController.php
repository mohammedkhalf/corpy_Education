<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Card;
use App\Payment;
use App\Order;
use App\Course;
use App\Wishlist;
use App\OrderDetails;
use Auth;
use DB;
use Session;
session_start();

class CheckoutController extends Controller
{
    public function home_checkout()
    {
        if (Auth::check()) 
        {
            $check_courses = Card::where('customer_id' , Auth::user()->id)->get();
            return view('pages.checkout')->with('check_courses' , $check_courses);
        }
        else
        {
            return Redirect::to('/login');
        }
    }

    public function purchase_courses (Request $request)
    {
        $payObj = new Payment;
        $payObj->payment_method =$request->payment_method;
        $payObj->payment_stauts = 'pinding';
        $payObj->save();
        $user_card = Card::where('customer_id' , Auth::user()->id)->get();
        $total_item = 0;
        $k = 0;
                              
        foreach ($user_card as $card_item) 
        {
            $total_item += $card_item->course_price;
            $k++;
        }  

        $ordObj = new Order;
        
        $ordObj->customer_name = Auth::user()->name;
        $ordObj->customer_phone = Auth::user()->phone;
        $ordObj->payment_id = $payObj->id;
        $ordObj->order_total = $total_item;
        $ordObj->order_stauts = 'pinding';
        $ordObj->order_code = '#'.time().rand(11,00).$ordObj->id;
        $ordObj->save();

        $detObj = new OrderDetails;

        foreach ($user_card as $card_item)
        {
            $detObj = new OrderDetails;
            $detObj->order_id = $ordObj->order_id;
            $detObj->course_id = $card_item->course_id;
            $detObj->course_name = $card_item->course_name;
            $detObj->center_name = $card_item->center_name;
            $detObj->course_level = $card_item->course_level;
            $detObj->course_price = $card_item->course_price;
            $detObj->course_image = $card_item->course_image;
            $detObj->save();
            $card_item->delete();
        }

        if($detObj->save())
        {
           
            return view('pages.payment')->with('flash_message_success' , 'Order Registration Successfully');
        }
        else
        {
            return view('pages.checkout')->with('flash_message_success' , 'Please Review youe Order');
        }

    }

   
    
    
}
