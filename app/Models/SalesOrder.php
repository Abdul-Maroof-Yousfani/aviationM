<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class SalesOrder extends Model
{
    use HasFactory;
    protected $fillable = ['order_number', 'customer_id', 'order_date', 'total_amount', 'status'];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
