<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserService extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function sub_category()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function images()
    {
        return $this->hasMany(UserServiceImage::class, 'user_service_id');
    }


    public function scopeSearch($query, $search)
    {
        return $query->where('title', 'like', '%' . $search . '%')
            ->orWhere('title', $search)
            ->orWhere('description', 'like', '%' . $search . '%');
    }

    public function scopeCategory($query, $category)
    {
        return $query->where('category_id', $category);
    }

    public function scopeSubCategory($query, $subCategory)
    {
        return $query->where('sub_category_id', $subCategory);
    }

    public function scopePrice($query, $price)
    {
        return $query->where('price', $price);
    }

    public function scopePriceRange($query, $priceRange)
    {
        return $query->whereBetween('price', $priceRange);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}
