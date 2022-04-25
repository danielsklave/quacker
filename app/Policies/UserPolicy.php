<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    // check if current user is given user
    public function edit(User $currentUser, User $user)
    {
        return $currentUser->is($user);
    }
}
