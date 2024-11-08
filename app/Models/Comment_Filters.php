<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment_Filters extends Model
{
    use HasFactory;

    protected $table = 'comment_filters';

      
    protected $fillable = [
        'content',
    ];

    public $timestamps = true; // Enable timestamps for created_at and updated_at columns
}

