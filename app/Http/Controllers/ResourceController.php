<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResourceController extends Controller
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

    public function introduce(Request $request){
        $url = $request->Url();
        $url = substr($url,0,-10);

        $resources = '{
            "description":"Daily-Loan api v1.1",
            "resources":[
                {
                    "name": "Users",
                    "href": "'.$url.'/users",
                    "description": "users/{id}"
                },
                {
                    "name": "Customers",
                    "href": "'.$url.'/customers",
                    "description": "customers/{id}"
                },
                {
                    "name": "Loans",
                    "href": "'.$url.'/loans",
                    "description": "loans/{id}"
                }
            ]
        }';

        $resources = json_decode($resources);

        return response()->json($resources);
    }
}
