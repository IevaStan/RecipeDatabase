<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'is_active'
    ];


    public function recipes(): HasMany
    {
        return $this->hasMany(Recipe::class);
    }
    // public function category(): BelongsTo
    // {
    //     return $this->belongsTo(Category::class, 'category_id');
    // }
}
