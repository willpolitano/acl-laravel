<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminPolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
        $policy = 'create_admin';

        if($user->permissions()->contains($policy)) {
            return true;
        }
    }
}
