<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
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
  
        $customer  = Customer::all();
  
        return response()->json($customer);
  
    }
	
	public function createCustomer(Request $request){
		$customer = Customer::create($request->all());
		return response()->json($customer);
	}
	
	public function getCustomer($id){
		$customer = Customer::find($id);
		return response()->json($customer);
	}
	
	public function updateCustomer(Request $request,$id){
		$customer = Customer::find($id);
		$customer->name = $request->input('name');
		$customer->age = $request->input('age');
		$customer->gender = $request->input('gender');
		$customer->email = $request->input('email');
		$customer->save();
		
		return response()->json($customer);
	}
	
	public function deleteCustomer($id){
		$customer = Customer::find($id);
		$customer->delete();
		
		return response()->json('deleted');
	}
}
