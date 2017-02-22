<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
  
        $user  = User::all();
  
        return response()->json($user);
  
    }
	
	public function createUser(Request $request){
		$user = User::create($request->all());
		return response()->json($user);
	}
	
	public function getUser(){
		$user = User::find($id);
		return response()->json($user);
	}
	
	public function updateUser(Request $request,$id){
		$user = User::find($id);
		$user->name = $request->input('name');
		$user->age = $request->input('age');
		$user->gender = $request->input('gender');
		$user->email = $request->input('email');
		$user->save();
		
		return response()->json($user);
	}
	
	public function deleteUser($id){
		$user = User::find($id);
		$user->delete();
		
		return response()->json('deleted');
	}
}
