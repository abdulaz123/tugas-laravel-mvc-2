<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class AuthController extends Controller
{
    public function signup(){
    	return view('form');
    }
	
	public function login(Request $req) {
		$this->validate($req,[
			"firstname" => "required",
			"lastname" => "required"
			]);
		return view('welcomelog',['data' => $req]);
		
	}
}