<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Photo;
class Spots extends Model
{
    //
    protected $fillable = ['address_id','title','photo_id','link','title','body'];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
