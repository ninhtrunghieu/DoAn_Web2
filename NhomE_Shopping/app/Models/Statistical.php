<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistical extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_statistical',
        'order_date',
        'profit',
        'quantity',
        'sales',
        'total_order'
    ];

    protected $table ='statisticals';
}