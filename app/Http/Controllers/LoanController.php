<?php

namespace App\Http\Controllers;

use App\Loan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoanController extends Controller
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
  
        $loan  = Loan::all();
  
        return response()->json($loan);
  
    }
	
	public function createLoan(Request $request){
		$loan = Loan::create($request->all());
		return response()->json($loan);
	}
	
	public function getLoan($id){
		$loan = Loan::find($id);
		return response()->json($loan);
	}
	
	public function updateLoan(Request $request,$id){
		$loan = Loan::find($id);
		$loan->name = $request->input('name');
		$loan->age = $request->input('age');
		$loan->gender = $request->input('gender');
		$loan->email = $request->input('email');
		$loan->save();
		
		return response()->json($loan);
	}
	
	public function deleteLoan($id){
		$loan = Loan::find($id);
		$loan->delete();
		
		return response()->json('deleted');
	}
}
