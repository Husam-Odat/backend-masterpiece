<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function useraddress()
    {
        $this->hasMany(UserAddress::class, 'id', 'user_id');
    }
    public function userpayment()
    {
        $this->hasMany(UserPayment::class, 'id', 'user_id');
    }
    public function payment()
    {
        $this->hasMany(Payment::class, 'id', 'user_id');
    }
    public function shipment()
    {
        $this->hasMany(Shipment::class, 'id', 'user_id');
    }
    public function review()
    {
        $this->hasMany(Review::class, 'id', 'user_id');
    }
    public function wishlist()
    {
        $this->hasMany(WishList::class, 'id', 'user_id');
    }
    public function sessioncart()
    {
        $this->hasMany(SessionCart::class, 'id', 'user_id');
    }
    public function order()
    {
        $this->hasMany(Order::class, 'id', 'user_id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'name',
        'lastName',
        'phone',
        'img',
        'role',        
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
