<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'userId',
        
        'quantity',
        'total',
        'paymentId',
        'orderProduct_Id',
        'shipmentId'
    ];
    use HasFactory;
    public function shipment()
    {
        $this->hasMany(Shipment::class, 'id', 'shipment_id');
    }
    public function payment()
    {
        $this->hasMany(Payment::class, 'id', 'payment_id');
    }
  
}
