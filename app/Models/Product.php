<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;

    use SoftDeletes;
    
    protected $fillable = [
        'category_id', 
        'name',
        'status',
        'stock', 
        'img', 
        'description', 
        'sku',
        'color',
        'price'
    ];

    protected $casts = [
        'img' => 'array',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeStatus($query)
    {
        return $query->whereStatus('activo')->orderBy('created_at');
    }

}
