<?php

namespace App;

use App\bill_detail;


use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    //
    protected $table ='bills';
    protected $primaryKey = 'bill_id';
    public function product(){
        return $this->hasMany(bill_detail::class);
    }



}
