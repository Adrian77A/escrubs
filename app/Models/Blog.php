<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title', 
        'description', 
        'img',  
        'show', 
        'order',
        'slug'
    ];

    protected $casts = [
        'show' => 'boolean',
    ];

    public function scopeStatus($query){

        return $query->where('show', 1)->orderBy('order', 'ASC');
    }


}
