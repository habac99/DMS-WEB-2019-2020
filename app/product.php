<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $table = 'products';
    protected $primaryKey='product_id';

    public function bill(){
        return $this->hasMany('App\bill');
    }

    public function product_type(){
        return $this->belongsTo(product_type::class);
    }
    public function product_detail(){
        return $this->hasMany(product_detail::class);

    }

}
