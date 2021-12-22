<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'users_id',
        'products_id',
        'transactions_id',
        'quantity',
    ];

    // public function user()
    // {
    //     return $this->hasOne(User::class, 'users_id', 'id');
    // }

    public function product()
    {
        return $this->hasOne(Product::class, 'products_id', 'id');
    }

    // public function transaction()
    // {
    //     return $this->hasOne(Transaction::class, 'transaction_id', 'id');
    // }
}
