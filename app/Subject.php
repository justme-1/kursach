<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Type;
class Subject extends Model
{
    public $timestamps =true;
    protected $fillable=['user_id','long','type_id','lat','images','description','descriptionRu','price','area','rooms'];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function users(){
        return $this->belongsToMany('App\User');
    }
    public function type(){
        return $this->belongsTo('App\Type');
    }
}
