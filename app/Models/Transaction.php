<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'users_id',
        'products_id',
        'cart_id',
        'transaction_date'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
    ];

    public function details(){
        return $this->hasMany(TransactionDetail::class, 'transactions_id', 'id');
    }

    public function product(){
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function cart(){
        return $this->belongsTo(Cart::class, 'carts_id', 'id');
    }
}
