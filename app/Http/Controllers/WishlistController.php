<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Course;
use App\User;
use App\Wishlist;
use Auth;
use DB;
use Session;
session_start();

class WishlistController extends Controller
{
    public function add_wishlist (Request $request , $course_id)
    {
        $course_info = Course::find($course_id);
        $wish = new Wishlist;
        $wish->customer_id = Auth::user()->id;
        $wish->course_id = $course_info->course_id;
        $wish->center_id = $course_info->user_id;
        $wish->save();
        return Redirect::to('/wishlist_content');
    }

    public function get_wishlist ()
    {
    	 
    	$wish_courses = DB::table('courses')
                            ->join('wishlists','courses.course_id' ,'=' ,'wishlists.course_id')
                            ->join('users','courses.user_id','=','users.id' )
                            ->select('courses.*' , 'users.name')
                            ->where('wishlists.customer_id', '=' ,Auth::user()->id)
                            ->get();
                            
        return view('pages.wishlist_content')->with('wish_courses' , $wish_courses);
    }


}
