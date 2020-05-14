<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Subject extends Model
{
    public $timestamps =true;
    protected $fillable=['user_id','long','lat','images','description','price'];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function users(){
        return $this->belongsToMany('App\User');
    }
}
