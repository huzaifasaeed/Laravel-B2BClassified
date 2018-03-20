<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub_Categorie extends Model
{
    //
    protected $fillable=['categorie_id','name'];

    public function advertisements()
    {
        return $this->hasMany(Advertisement::class);
    }

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
}
