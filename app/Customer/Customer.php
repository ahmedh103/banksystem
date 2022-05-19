<?php

namespace App\Customer;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table="customers";
    protected $fillable=['name','email','balance'];
    public $timestamps = false;
}
