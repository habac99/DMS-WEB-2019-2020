<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_type extends Model
{
    protected $table = "product_types";
    protected $primaryKey = 'type_id';
    //
    public function  product(){
        return $this->hasMany(product::class);
    }
}
