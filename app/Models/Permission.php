<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    //Uma permissão pertence a muitas regras
    public function roles()
    {
        return $this->belognsToMany(Role::class);
    }
}
