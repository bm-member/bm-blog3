<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function isAdmin(User $user)
    {
        return $user->role === 'admin';
    }

    public function isAdminOrAuthor(User $user)
    {
        return $user->role === 'admin' || $user->role === 'author'; 
    }
}
