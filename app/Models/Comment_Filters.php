<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment_Filters extends Model
{
    use HasFactory;
    protected $table = 'comment_filters';
    public $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
      'id',
      'content',
      'created_at'
    ];
}
