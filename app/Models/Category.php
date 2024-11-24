<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    public function menu(): HasMany
    {
        return $this->hasMany(Menu::class);
    }

    protected $fillable = [
        'name',
        'icon'
    ];
}
