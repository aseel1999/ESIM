<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_Device extends Model
{
    protected $table = 'company_devices';
    use HasFactory;
    protected $guarded=[];
    
    public function devices(){
        return $this->hasMany(Device::class ,'company_device_id' , 'id');

    }
}
