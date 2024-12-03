<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Menu extends Model
{
    use HasFactory;

    protected $table = 'menus';
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function promo(): BelongsToMany
    {
        return $this->belongsToMany(Promo::class, 'menu_promo', 'menu_id', 'promo_id');
    }

    protected $fillable = [
        'title',
        'category_id',
        'cover',
        'price',
        'stock',
        'description',
    ];

}
