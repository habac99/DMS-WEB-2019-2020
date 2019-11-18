<?php

namespace App;

use App\bill_detail;


use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    //
    protected $table ='bills';
    protected $primaryKey = 'bill_id';
    public function bill_detail(){
        return $this->hasMany('App\bill_details','bill_id','bill_id');
    }
    public function bill(){
        return $this->belongsTo('App\customer','customer_id','customer_id');
    }



}
