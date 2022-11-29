<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pakage;
use App\Models\Type_Payment;

class Order extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function package(){
        return $this->hasOne(Pakage::class);
    }
    public function type_payment(){
        return $this->hasOne(Type_Payment::class);
    }
}
