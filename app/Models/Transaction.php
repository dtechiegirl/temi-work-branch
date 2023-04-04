<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'name',
        'description',
        'amount',
        'user_id',
        'customer_id'
        
    ];

    public function customers(){
        return $this->belongsTo(Customer::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
