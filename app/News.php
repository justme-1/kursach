<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table='News';
    protected $fillable=['news','news_short','author','header','image','created_at'];

}
