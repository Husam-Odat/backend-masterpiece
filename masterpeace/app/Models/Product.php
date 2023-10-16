<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function productcategory()
    {
        $this->hasMany(ProductCategory::class, 'id', 'product_id');
    }
    public function productinventory()
    {
        $this->hasMany(ProductInventory::class, 'id', 'product_id');
    }
    public function review()
    {
        $this->hasMany(Review::class, 'id', 'product_id');
    }
    public function orderproduct()
    {
        $this->hasMany(OrderProduct::class, 'id', 'product_id');
    }
    public function discount()
    {
        $this->hasMany(Discount::class, 'id', 'product_id');
    }
    public function cart()
    {
        return $this->hasMany(cart::class);
    }
    public function wishlist()
    {
        $this->hasMany(WishList::class, 'id', 'product_id');
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
}
