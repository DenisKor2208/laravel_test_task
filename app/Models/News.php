<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public function roles() {
        return $this->belongsToMany(Roles::class,
            'news_roles',
            'news_id',
            'role_code',
            'id',
            'code',
            'roles');
    }
}
