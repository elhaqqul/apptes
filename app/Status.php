<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status_user';
    public $timestamps = false;

    function users_tes(){
    	return $this->belongsTo(App\UserModel::class);
    }
}
