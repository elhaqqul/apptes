<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'users_tes';
    public $timestamps = false;

    function status_user(){
    	return $this->hasMany(App\Status::class);
    }
}
