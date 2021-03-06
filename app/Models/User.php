<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function role() {
        return $this->hasOne(Roles::class, 'code', 'role_code');
    }
}
