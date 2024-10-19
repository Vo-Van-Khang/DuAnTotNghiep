<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    use HasFactory;
    protected $table = 'movies';
    public $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
      'id',
      'title',
      'description',
      'thumbnail',
      'cast',
      'director',
      'release_year',
      'id_category',
      'country',
      'views',
      'status',
      'duration',
      'created_at'
    ];
}
