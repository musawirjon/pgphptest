<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use App\Models\Comment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($user_id)
    { 
        $user = User::with('comments')->where('id',$user_id)->first(); 
        return view('welcome',compact('user'));
    }
    public function showUserComments(Request $request, $id){
        $user = User::with('comments')->where('id',$id)->first(); 
        //$request = new Request; 
        if($request->is('api*')){
	       	return response()->json(
		     [
		         'status'            	=> 	'success',
		         'user'          	=> 	$user,  
		     ], 200);
        }else{
        	return view('comments',compact('user'));
        } 
    }
    public function appendUserComments(Request $request){   
    	if(app()->runningInConsole()){
	    	$validated = $request->validate([
		    'id'   => 'required', 
		    'comment'  => 'required',
		]);
    	}
        else{
        	$validated = $request->validate([
		    'comment'   => 'required',
		    'id'        => 'required',
		    'password'  => 'required',
		]);
		
		$password = env('PASSWORD', 'secret');
		if($request->password != $password){
		    return \Response::json('Please provide a valid password! which is secret for testing',401);
		}
        }
  
        $userComment = Comment::where('user_id',$request->id)->first();
        if($userComment){ 
            $userComment->comment = $request->comment;
            $userComment->save();
		if(app()->runningInConsole()){
            		dd( 'Comment updated successfully!');
    		}else{
            		return \Response::json('Comment updated successfully!',200);
    		}
        }else{ 
		if(app()->runningInConsole()){
            		dd('User not found');
    		}else{
            		return \Response::json('User not found',401);
    		}
        }
    }
}
