<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    protected $fillable = ['text', 'customer_id', 'user_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function customer(){
        return $this->belongsTo('App\Customer');
    }

}
