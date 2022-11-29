<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pakage;

class Order extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function package(){
        return $this->hasOne(Pakage::class);
    }
}
