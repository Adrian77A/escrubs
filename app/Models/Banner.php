<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'description', 'img', 'status', 'show', 'order'];

    protected $casts = [
        'show' => 'boolean',
    ];

    public function scopeStatus($query){

        return $query->where('status','active')->where('show', 1)->orderBy('order', 'ASC');
    }
    
}
