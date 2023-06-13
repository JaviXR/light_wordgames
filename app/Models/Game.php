<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'duration',
        'type_id',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class,'userGames')->withTimestamps();
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
}
