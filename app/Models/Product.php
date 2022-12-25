<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'description', 'status', 'img', 'category_id'];

    protected $casts = [
        'status' => 'boolean',
        'properties' => 'array',
    ];


    public function getPagePriceAttribute(){
        return $this->attributes['price'] / 100;
    }

    public function setPriceAttribute($value){
        $this->attributes['price'] = $value * 100;
    }
}
