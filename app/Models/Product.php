<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int - contains the product primary key (id)
     * $this->attributes['name'] - string - contains the product name
     * $this->attributes['description'] - string - contains the product description
     * $this->attributes['image'] - string - contains the product image
     * $this->attributes['price'] - int - contains the product price
     * $this->attributes['created_at'] - timestamp - contains the product creation date
     * $this->attributes['updated_at'] - timestamp - contains the product update date
     */

class Product extends Model
{
    // use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'brand',
        'currency',
        'category',
        'available_stock',
        'is_active',
    ];

    public static function validate($request)
    {
        $request->validate([
            "name" => "required|max:255",
            "description" => "required",
            "price" => "required|numeric|gt:0",
            "currency" => "required|string|max:5",
            "brand" => "required|string|max:100",
            "category" => "required|string|max:100",
            "available_stock" => "required|integer|min:0",
            "is_active" => "required|boolean",
            "image" => "nullable|image"
        ]);
    }

    // === Getters and Setters ===

    public function getId() { return $this->attributes['id']; }
    public function setId($id) { $this->attributes['id'] = $id; }

    public function getName() { return $this->attributes['name']; }
    public function setName($name) { $this->attributes['name'] = $name; }

    public function getDescription() { return $this->attributes['description']; }
    public function setDescription($description) { $this->attributes['description'] = $description; }

    public function getImage() { return $this->attributes['image']; }
    public function setImage($image) { $this->attributes['image'] = $image; }

    public function getPrice() { return $this->attributes['price']; }
    public function setPrice($price) { $this->attributes['price'] = $price; }
    
    public function getCurrency() { return $this->attributes['currency']; }
    public function setCurrency($currency) { $this->attributes['currency'] = $currency; }

    public function getBrand() { return $this->attributes['brand']; }
    public function setBrand($brand) { $this->attributes['brand'] = $brand; }

    public function getCategory() { return $this->attributes['category']; }
    public function setCategory($category) { $this->attributes['category'] = $category; }

    public function getAvailableStock() { return $this->attributes['available_stock']; }
    public function setAvailableStock($stock) { $this->attributes['available_stock'] = $stock; }

    public function getIsActive() { return $this->attributes['is_active']; }
    public function setIsActive($active) { $this->attributes['is_active'] = $active; }

    public function getCreatedAt() { return $this->attributes['created_at']; }
    public function setCreatedAt($createdAt) { $this->attributes['created_at'] = $createdAt; }

    public function getUpdatedAt() { return $this->attributes['updated_at']; }
    public function setUpdatedAt($updatedAt) { $this->attributes['updated_at'] = $updatedAt; }
}