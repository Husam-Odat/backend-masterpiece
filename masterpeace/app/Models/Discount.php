<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    public function product()
    {
        $this->belongsTo(Product::class, 'id', 'product_id');
    }
    protected $fillable = [
        'name',
        'description',
        'discountPercent',
        'active',
        'img'

    ];
}
