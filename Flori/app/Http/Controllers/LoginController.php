<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidationRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Validator;
use DB;
use Carbon\Carbon;
use App\User;

class LoginController extends BaseController
{
	public function create()
    {
    	return view('login');
    }


    public function insert(Request $request)
    {
    	
    	$first_name = $request->input('first_name');
    	$last_name = $request->input('last_name');
    	$cnp = $request->input('cnp');
    	$username = $request->input('username');
    	$email = $request->input('email');
    	$password = $request->input('password');
    	$telephone = $request->input('telephone');
    	
    	

    	$data = array('cnp'=>$cnp,'first_name'=>$first_name,'last-name'=>$last_name,'username'=>$username,'email'=>$email,'password'=>$password,'telephone'=>$telephone,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now());

    	DB::table('users')->insert($data);

    	

    	return view('index');
    }


    public function checklogin(Request $request)
    {

    	$this->validation($request, [
    		'email'=>'required|email',
    		'password'=>'required|alphaNum|min:3'
    	]);

    	$user_data = array(
    		'email' => $request->get('email'),
    		'password' => $request->get('password')
    	);

    	if(Auth::attempt($user_data))
    	{
    		return redirect('/index');
    	}
    	else
    	{
    		return back()->with('error','Wrong Login Details');
    	}


    }


    public function login(Request $req)
   	{

   		$loginusername = $req->input('loginusername');
   		$loginpassword = $req->input('loginpassword');

   		$checkLogin = DB::table('users')->where(['username'=>$loginusername,'password'=>$loginpassword])->get();
   		

   		if(count($checkLogin) > 0)
   		{

   			$req->session()->put('loginusername',$loginusername);
   			
        echo 'Welcome, $loginusername, {{$loginusername}} ';
        print_r($req->input());
        return redirect('/index');

          

   		}
   		else
   		{
   			return redirect('/login');
   		}


   		
   	}




   	 public function logout(Request $request)
   	{
   		$request->session()->flush();
   		return redirect('/index');
   		
   	}
   
	
}

