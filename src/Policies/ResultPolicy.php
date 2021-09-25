<?php

namespace Studio\Novacron\Policies;

use Illuminate\Foundation\Auth\User;
use Studio\Totem\Result;
use Illuminate\Auth\Access\HandlesAuthorization;

class ResultPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the Result.
     *
     * @param  \Illuminate\Foundation\Auth\User  $user
     * @param  \Studio\Totem\Result  $result
     * @return mixed
     */
    public function view(User $user, Result $result)
    {
        return true;
    }

    /**
     * Determine whether the user can create Results.
     *
     * @param  \Illuminate\Foundation\Auth\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return false;
    }

    /**
     * Determine whether the user can update the Result.
     *
     * @param  \Illuminate\Foundation\Auth\User  $user
     * @param  \Studio\Totem\Result  $result
     * @return mixed
     */
    public function update(User $user, Result $result)
    {
        return false;
    }

    /**
     * Determine whether the user can delete the Result.
     *
     * @param  \Illuminate\Foundation\Auth\User  $user
     * @param  \Studio\Totem\Result  $result
     * @return mixed
     */
    public function delete(User $user, Result $result)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the Result.
     *
     * @param  \Illuminate\Foundation\Auth\User  $user
     * @param  \Studio\Totem\Result  $result
     * @return mixed
     */
    public function restore(User $user, Result $result)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the Result.
     *
     * @param  \Illuminate\Foundation\Auth\User  $user
     * @param  \Studio\Totem\Result  $result
     * @return mixed
     */
    public function forceDelete(User $user, Result $result)
    {
        return false;
    }
}
