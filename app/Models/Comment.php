<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\hasfactory;

class Comment extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'id_movie',
        'id_user',
        'content',
        'status',
        'isDeleted',
    ];

    // Hàm kiểm tra bình luận đã xóa mềm
    public function scopeNotDeleted($query)
    {
        return $query->where('isDeleted', 0);
    }
    // Thiết lập quan hệ với Movie và User (nếu cần)
    
}
