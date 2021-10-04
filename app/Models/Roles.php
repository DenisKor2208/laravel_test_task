<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    use HasFactory;

    public function news() {
        return $this->belongsToMany(News::class,
                                     'news_roles',
                              'role_code',
                              'news_id',
                                  'code',
                                  'id',
                                    'news');
    }

    public function user() {
        return $this->hasMany(User::class, 'role_code', 'code');

    }
}
