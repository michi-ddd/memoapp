<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['nickname', 'gender'];
    
    public function memos(){
        return $this->hasMany('App\Memo');
    }

}
