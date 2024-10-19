<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply_comments extends Model
{
    use HasFactory;
    protected $table = 'reply_comments';
    public $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
      'id',
      'id_movie',
      'id_user',
      'id_comment',
      'name_reply',
      'content',
      'created_at'
    ];
}
