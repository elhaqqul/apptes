<?php

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
use App\UserModel;
use App\Status;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/tes', function () {
    $user_array = array('name'=>'elhaqqul',
    					'email'=>'meggieelhaqqul@ymail.com',
    					'password'=>md5('123'),
    					'address'=>'Jalan Tanjung Duren Selatan'	
    			  );
    $user = new UserModel;
    $user->insert($user_array);
});

Route::get('/getByid/{id}','Home@getData')->name('getData');

Route::get('/InsertoneToMany', function(){
	// $user = new UserModel;
	// $user->name="Tes";
	// $user->email="Tes@gmail.com";
	// $user->address="Tes Address";
	// $user->password=md5("321");
	// $user->save();
	// $id = $user->id;
	
	$user = UserModel::find(2);
	$status = new Status(['status_name'=>'tes status']);
	//$status->status="tes Status";
	$user->status_user()->save($status);
	
});
