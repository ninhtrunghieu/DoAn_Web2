<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category_name',
        'parentId',
        'alias',
        'created_at'
    ];

    protected $table ='categories';
    public function categoryChildren(){
        return $this->hasMany(Category::class, 'parentId');
    }
}
