<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
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
