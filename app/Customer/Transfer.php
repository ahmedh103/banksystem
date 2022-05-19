<?php

namespace App\Customer;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $table="transfers";
    protected $fillable=['sender_name','reciver_name','amount','date'];
    public $timestamps = false;
}
