<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;
    public function user()
    {
        $this->belongsTo(User::class, 'id', 'user_id');
    }

    public function order()
    {
        $this->belongsTo(order::class, 'id', 'shipment_id');
    }

    protected $fillable = [
        'date',
        'address',
        'city',
        'state',
        'country',
        'postalCode',
        'userId',

    ];
}
