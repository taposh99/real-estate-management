<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Location extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function property(): HasMany
    {
        return $this->hasMany(Property::class);
    }
}
