<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Guest;

use Illuminate\Auth\Access\HandlesAuthorization;

class GuestPolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
        $policy = 'create_guest';

        if($user->permissions()->contains($policy)) {
            return true;
        }
    }
}
