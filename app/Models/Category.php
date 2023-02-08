<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name', 'description', 'parent_id'
    ];
    protected $dates = ['deleted_at'];

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }
    public function product()
    {
        return $this->hasMany(Product::class);
    }
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($category) {
            foreach ($category->children()->get() as $parent) {
                $parent->delete();
            }
        });
    }
}
