<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    //Uma regra pertence a muitas permissões
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
