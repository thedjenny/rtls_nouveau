<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Client;

class LoginController extends Controller
{

    use IssueTokenTrait;

	private $client;

	public function __construct(){
		$this->client = Client::find(1);
	}

    public function login(Request $request){

    	$this->validate($request, [
    		'username' => 'required',
    		'password' => 'required'
    	]);

        $params = [
            'grant_type' => 'password',
            'client_id' => $this->client->id,
            'client_secret' => $this->client->secret,
            'username' => request('username'),
            'email'=> request('email'),
            'password' => request('password'),
            'scope' => '*'
        ];

        $request->request->add($params);
        $proxy = Request::create('oauth/token', 'POST');
        return Route::dispatch($proxy);

    }

    public function refresh(Request $request){
    	$this->validate($request, [
    		'refresh_token' => 'required'
    	]);

    	return $this->issueToken($request, 'refresh_token');

    }

    public function logout(Request $request){

    	$accessToken = Auth::user()->token();

    	DB::table('oauth_refresh_tokens')
    		->where('access_token_id', $accessToken->id)
    		->update(['revoked' => true]);

    	$accessToken->revoke();

    	return response()->json([], 204);

    }


    public function update(Request $request){
    $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        DB::table('users')
            ->where('email', $request->email)
            ->update(['password'=> bcrypt(request('password'))]);

        

        
        return $this->issueToken($request, 'password');
    }

      public function update_keyGenerator(Request $request){
   
        DB::table('users')
            ->where('email', $request->email)
            ->update(['private_key'=> rand(100,1000)]);

        
        return true;
    }
}
