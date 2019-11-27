<?php

namespace App;
use App\Role;
use App\Photo;
use App\User;
use App\Category;
use App\Brand;
use App\Size;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['category_id','brand_id','title','body','price','size_id','price','photo_id'];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function photo(){
        return $this->belongsTo('App\Photo');
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function brand(){
        return $this->belongsTo('App\Brand');
    }
    public function size(){
        return $this->belongsTo('App\Size');
    }
}
