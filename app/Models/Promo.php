<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Promo extends Model
{
    public function menu(): HasMany
    {
        return $this->belongsToMany(Menu::class, 'menu_promo', 'promo_id', 'menu_id');
    }

    protected $fillable = [
        'buy',
        'get'
    ];
}

