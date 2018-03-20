<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    //
   // protected $fillable = ['address','city','describe','price','sub_categorie_id','title','user_id','type'];


    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function sub_categorie()
    {
        return $this->belongsTo(Sub_Categorie::class);
    }

}
