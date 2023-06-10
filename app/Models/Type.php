<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'options',
    ];

    public function datasets(): HasMany
    {
        return $this->hasMany(Dataset::class, 'type_id');
    }
    public function games(): HasMany
    {
        return $this->hasMany(Game::class, 'type_id');
    }
}
