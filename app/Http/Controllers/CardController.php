<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Card;
use App\Course;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use Session;
session_start();

class CardController extends Controller
{
    public function add_to_card(Request $request)
    {

    	if(!Auth::check())
    	{
    		Session::flash('message' , 'Please Login or Register');
    		return Redirect::to('/login');
    	}
    	else
    	{
    		// echo "<pre>"; print_r(Auth::user()->id); echo "</pre>";
    		$course_id = $request->course_id;
    		$course_info = Course::find($course_id);
    		// echo "<pre>"; print_r($course_info); echo "</pre>"; die;
    		$center_info = DB::table('users')
    						->where('id',$course_info->user_id)
    						->first();
    		// echo "<pre>"; print_r($center_info->name); echo "</pre>"; die;
    		$new_card = new Card;
    		$new_card->customer_id = Auth::user()->id;
    		$new_card->course_id = $course_id;
    		$new_card->center_name = $center_info->name;
    		$new_card->course_name = $course_info->course_name;
    		$new_card->course_price = $course_info->course_price;
    		$new_card->course_level = $course_info->course_level;
    		$new_card->course_image = $course_info->course_image;
    		// echo "<pre>"; print_r($new_card); echo "</pre>"; die;
    		$new_card->save();

    		if($new_card->save())
    		{
    			return Redirect::to('/card_content')->with('flash_message_success' , 'Course Enrolling Successfully');
    		}
    		else
    		{
    			return Redirect::to('/card_content')->with('flash_message_error' , 'Course Enrolling Failed');
    		}

    	}
    }

    public function card_content (Request $request)
    {
        if(Auth::check())
        {
            $card_items = Card::where('customer_id' , Auth::user()->id)->get();
            return view('pages.card_content')->with('card_items',$card_items);
        }
        else
        {
            return redirect::to('/login');

        }

    }

    public function delete_item ($id)
    {

    	$deleted_card = Card::destroy($id);

    	if($deleted_card)
    	{
    		return Redirect::to('/card_content')->with('flash_message_success' , 'Recored Deleted Successfully');
    	}
    	else
    	{
    		return Redirect::to('/card_content')->with('flash_message_error' , 'Recored Deleted Failed');
    	}
    }


}
