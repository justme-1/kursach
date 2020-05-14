<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    public $timestamps = false;
    protected $fillable=['user_id','data'];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
