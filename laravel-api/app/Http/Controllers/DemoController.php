<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(){
        $array =[
            [
                'name' => 'john',
                'email' => 'john@example.com'
            ],
            [
                'name'=> 'Mark',
                'email' => 'mark@example.com'
            ]
            ];
            return response()->json( [
                'meaasge' => '2 User Found',
                'data' => $array,
                'status'=>true
            ], 200);
    }
}
