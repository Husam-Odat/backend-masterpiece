<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function productcategory()
    {
       return $this->hasMany(ProductCategory::class, 'id', 'productId');
    }
    public function productinventory()
    {
      return  $this->hasMany(ProductInventory::class, 'id', 'productId');
    }
    public function review()
    {
       return $this->hasMany(Review::class, 'id', 'productId');
    }
    // public function orderproduct()
    // {
    //     $this->hasMany(OrderProduct::class, 'id', 'product_id');
    // }
    public function discount()
    {
       return $this->hasMany(Discount::class, 'id', 'productId');
    }
    public function cart()
    {
        return $this->hasMany(cart::class);
    }
    public function wishlist()
    {
       return $this->hasMany(WishList::class, 'id', 'productId');
    }

    protected $fillable = [

        'name',
        'description',
        'SKU',
        'categoryId',
        'img',
        'img1',
        'img2',
        'img3',
        'inventoryId',
        'discountId',
        'price',
        'weight'

    ];

    public function orderProduct()
    {
       return $this->hasMany(OrderProduct::class,'id', 'productId');
    }
}
