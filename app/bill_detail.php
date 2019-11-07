<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill_detail extends Model
{
    //
    protected $table ='bill_details';
    protected $primaryKey = ['bill_id', 'product_id'];
    public $incrementing = false;
}
