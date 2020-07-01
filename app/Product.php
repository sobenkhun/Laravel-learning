<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    use SoftDeletes;
    protected $dates=['deleted_at'];
    protected $filliable= ['name','detail','price','stock','discount'];
}
