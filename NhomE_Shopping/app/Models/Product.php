<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'price',
        'categoryId',
        'ownerId',
        'homeflag',
        'hotflag',
        'alias',
        'images',
        'viewcount',
        'quatity',
        'content',
        'description',
        'created_at',
        'isdiscount',
        'discount'
    ];

    protected $table ='products';
}
