<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [  'service', 'name', 'email', 'mobile'];
}
