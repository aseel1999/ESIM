<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Type_Payment extends Model
{
    protected $table = 'type_payments';
    use HasFactory;
    protected $fillable = ['image','name'];
   
    
}
