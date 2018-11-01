<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Course;
use App\Center;
use DB;
use Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use validator;
use Session;
session_start();

class CenterController extends Controller
{

    public function register_page()
    {
        return view('pages.register_page');
    }
    public function add_center()
    {
    	return view('center.add_center');
    } 

    public function add_center_back ()
    {
    	return view('admin.add_center_back');
    }

    

    public function save_center(Request $request)
    {
    	// echo'<pre>'; print_r($request->all()); die;
    	$this->validate($request, [
    		'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'phone' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
		    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		    'off_doc.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
		]);
	

		$data = array();
		$image = $request->file('image');
		if($image){
			$image_name = str_random(20);
			$ext = strtolower($image->getClientOriginalExtension());
			$image_full_name = $image_name.'.'.$ext;
			$upload_path = 'frontend/images/upload/center';
			$image_url = $image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			if($success){
				$data['image'] = $image_url;
			}
		}

    	$user = User::firstOrCreate([  //protection against duplicate entry
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'phone' => $request->phone,
        'city' => $request->city,
        'address' => $request->address,
        'image' => $data['image'],
        'type' => 'center',
        'publication_status' => 1
   		 ]);


    	if($user)
    	{
    		    // echo "ok";
    			$doc_off = $request->file('off_doc');
    		    if($doc_off)
		        {
		            foreach($doc_off as $doc_image)
		            {
		            	$doc_image_name = str_random(20);
						$doc_ext = strtolower($doc_image->getClientOriginalExtension());
						$doc_image_full_name = $doc_image_name.'.'.$doc_ext;
						$doc_upload_path = 'frontend/images/upload/center';
						$doc_image_url = $doc_image_full_name;
						$doc_success=$doc_image->move($doc_upload_path,$doc_image_full_name);
						if($doc_success)
						{
							$data['off_doc'] = $doc_image_url;
							$save_doc_image = $user->center()->create([
				                'off_doc' => $data['off_doc']
				            ]);
						}
		            }

				}	       
		        else
		        {
		        	echo "false";
		        }

			if(Auth::attempt(['email'=> request()->email , 'password' => request()->password]))
	        {
	        	// Session::put('message' , ' Center added Successfully !');

	            return redirect()->intended('/');
	        }
	        else
	        {
	            // return redirect()->back()->withInput('username');
	            Session::put('message' , 'Please Review your Input data');
	            return redirect()->back();
	        }

    	}
    	else
    	{
    		echo "error";

    	}
    }

    public function view_centers (Request $request)
    {
    	$all_centers = \App\User::where('type','center')->with('center')->get();
    	
    	return view('admin.view_centers')->with('all_centers' , $all_centers);
    }

    public function unactive_center ($id)
    {
    	// echo $id;
    	DB::table('users')
    			->where('id' , $id)
    	        ->update(['publication_status'=> 0]);
    	Session::put('message' , 'Acadamy UnActive Successfully !');
    	return Redirect::to('/view_centers');

    }

    public function active_center ($id)
    {
    	DB::table('users')
    			->where('id' , $id)
    	        ->update(['publication_status'=> 1]);
    	Session::put('message' , 'Acadamy Active Successfully !');
    	return Redirect::to('/view_centers');
    }

    public function edit_center ($id)
    {
    	// echo $id;
    	$selected_center = \App\User::where('id',$id)->with('center')->first();
    	// echo "<pre>"; print_r($selected_center); die;
    	return view('admin.update_center')->with('selected_center' , $selected_center);
    }

    public function delete_center ($id)
    {
    	$user = User::find($id);

    	$user->center()->delete();

    	$user->delete();

    	Session::get('message' , 'Center Deleted Successfully');
       	return Redirect::to('/view_centers');

    }
    public function save_update_center(Request $request , $id)
    {
    	

    	$this->validate($request, [
    		'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
            'phone' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
		    'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
		    'off_doc.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
		]);
		

    	$data = array();
    	$user = User::findOrFail($id);
		$user->name =$request->name;
		$user->email =$request->email;
		$user->password =bcrypt($request->password);
		$user->phone =$request->phone;
		$user->city =$request->city;
		$user->address =$request->address;
		$user->publication_status = 1;


    	$image = $request->file('image');
		if($image){
			$image_name = str_random(20);
			$ext = strtolower($image->getClientOriginalExtension());
			$image_full_name = $image_name.'.'.$ext;
			$upload_path = 'frontend/images/upload/center';
			$image_url = $image_full_name;
			$success=$image->move($upload_path,$image_full_name);
			if($success){
				$data['image'] = $image_url;
			}
		}

		$user->image = $data['image'];

		$user->save();


    	if($user)
    	{
    		$doc_off = $request->file('off_doc');


    		    if($doc_off)
		        {
		            foreach($doc_off as $doc_image)
		            {

		            	$doc_image_name = str_random(20);
						$doc_ext = strtolower($doc_image->getClientOriginalExtension());
						$doc_image_full_name = $doc_image_name.'.'.$doc_ext;
						$doc_upload_path = 'frontend/images/upload/center';
						$doc_image_url = $doc_image_full_name;
						$doc_success=$doc_image->move($doc_upload_path,$doc_image_full_name);
						if($doc_success)
						{
							$data['off_doc'] = $doc_image_url;

							$update_doc_image = $user->center()->update([
				                'off_doc' => $data['off_doc']
				            ]);

				            echo "done";
						}
		            }

				}	       

    	}
        else
        {
            echo "Error in Insert your data";
        }
   

    } //end function



}
