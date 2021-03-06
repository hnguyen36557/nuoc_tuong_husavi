<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    protected $fillable = ['id', 'name', 'email', 'phone', 'address'];

    public $timestamps = true;

}
