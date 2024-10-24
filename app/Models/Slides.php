<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slides extends Model
{
    use HasFactory;
    protected $table = 'slides';
    public $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
      'id',
      'image',
      'status',
      'id_movie'
    ];
    public function get_movies()
    {
        return $this->belongsTo(Movies::class, 'id_movie'); 
    }
}
