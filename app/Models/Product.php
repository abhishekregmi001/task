<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'name','slug','category_id'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function rating()
    {
        return $this->hasMany(ProductRating::class,'product_id');
    }
    public function detail()
    {
        return $this->hasOne(ProductDetail::class,'product_id');
    }
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($product) {
            foreach ($product->detail()->get() as $child) {
                $child->delete();
            }
            foreach ($product->rating()->get() as $child) {
                $child->delete();
            }
        });
    }
    
}
