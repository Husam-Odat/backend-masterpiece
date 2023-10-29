<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'productId',
       
    ];
    public function user()
    {
       return $this->belongsTo(User::class, 'id', 'userId');
    }
    public function product()
    {
       return $this->belongsTo(Product::class, 'id', 'productId');
    }
}
