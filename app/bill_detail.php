<?php

namespace App;
use App\bill;
use App\product;
use Illuminate\Database\Eloquent\Model;

class bill_detail extends Model
{
    //
    protected $table ='bill_details';
    protected $primaryKey = ['bill_id', 'product_id'];
    public $incrementing = false;

    public function bill(){
        return $this->belongsTo(bill::class);
    }
    public function product(){
        return $this->belongsTo(product::class);
    }

}
