<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'category_id',
        'image',
        'short_desc',
        'content',
        'status',
    ];
}
