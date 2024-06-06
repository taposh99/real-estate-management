<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Property extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    
    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
    public function propertyType(): BelongsTo
    {
        return $this->belongsTo(PropertyType::class);
    }


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($property) {
            $property->code = self::generateUniqueCode();
        });
    }

    public static function generateUniqueCode()
    {
        $code = mt_rand(1000, 9999);
        while (self::where('code', $code)->exists()) {
            $code = mt_rand(1000, 9999);
        }
        return $code;
    }
}
