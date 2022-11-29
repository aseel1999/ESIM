<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table='devices';
    public function company(){
        return $this->belongsTo(Company_Device::class,'$company_device_id');
    }
}
