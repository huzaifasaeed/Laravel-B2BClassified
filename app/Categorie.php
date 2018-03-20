<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Categorie extends Model
{
    //
    protected $fillable=['name','categories'];

    public function sub_categories()
    {
        return $this->hasMany(Sub_categorie::class);
    }
}
