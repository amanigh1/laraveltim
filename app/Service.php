<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'description', 'image'];

    public function getImageAttribute($value){
        return 'images/services/'.$value;
    }
}
