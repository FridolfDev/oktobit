<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_name',
        'type_id',
        'product_id'
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
