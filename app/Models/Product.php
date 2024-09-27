<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "product_name",
        "category",
        "price",
        "discount"
    ];

    private $rules = [
        "product_name" => "required",
        "category" => "required",
        "price" => "required|numeric|between:0.00,99999999.99"
    ];

    private $messages = [
        "product_name.required" => "A name is needed!",
        "category.required" => "A category for the product is needed!",
        "price.required" => "A price for the product is needed!",
        "price.numeric" => "A price should be a numeric!"
    ];

    public function validation(): array
    {
        return $this->rules;
    }

    public function validation_messages(): array
    {
        return $this->messages;
    }
}
