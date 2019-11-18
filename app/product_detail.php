<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_detail extends Model
{
    //
    protected $table = 'product_details';
    protected $primaryKey = 'id';
    public function product(){
        return $this->belongsTo('App\product','product_id','product_id');
    }
}
