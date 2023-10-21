<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'tbl_product';
    protected $fillable = [
        'user_id',
        'product_name',
        'product_price',
        'product_content',
        'product_img',   
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}