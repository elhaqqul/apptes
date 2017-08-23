<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;
class Home extends Controller
{
    function getData($id){
    	$user = UserModel::find($id);
    	//$array = array('address'=>'Jalan Tanjung Duren Selatan RT/RT 08/06 No 29');
    	//$user->find($id);
    	$user->address = "Jalan Tanjung Duren Selatan RT/RT 08/06 No 29";
    	$user->save();
    	//$data = json_encode(json_decode($data,true));
    }
}
