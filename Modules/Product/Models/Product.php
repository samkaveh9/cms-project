<?php

namespace Modules\Product\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Category\Models\Category;

class Product extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'title','slug','description','price', 'category_id',
        'discount_price','image', 'content', 'status'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return "slug";
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
