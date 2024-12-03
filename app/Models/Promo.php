<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Promo extends Model
{
    use HasFactory;

    protected $table = 'promos';
    
    // Relasi Many-to-Many ke tabel menus
    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'menu_promo', 'promo_id', 'menu_id');
    }

    protected $fillable = [
        'buy',
        'get'
    ];
}

