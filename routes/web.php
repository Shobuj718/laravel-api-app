<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user-data', 'UserController@getUserdata');

/*Route::get('/', function () {
    $client = new \GuzzleHttp\Client;
    try {
        $response = $client->post('http://localhost:8000/oauth/token', [
            'form_params' => [
                'client_id' => '3',
                'client_secret' => 'Sg0x8ZMdNt3nzc2T2uP2WUxycjn5Vh9K0OZEr2e5',
                'grant_type' => 'password',
                'username' => 'test2@gmail.com',
                'password' => '12345678',
                'scope' => '*',
            ]
        ]);
 
        $auth = json_decode( (string) $response->getBody() );
        $response = $client->get('http://localhost:8000/api/users', [
            'headers' => [
                'Authorization' => 'Bearer '.$auth->access_token,
            ]
        ]);
        $details = json_decode( (string) $response->getBody() );
        return $details;
        

        }catch(\Exception $e){
        	$message = $e->getMessage();
            return response()->json(['error' => 1, 'message' => $message]);
        }
});*/



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
