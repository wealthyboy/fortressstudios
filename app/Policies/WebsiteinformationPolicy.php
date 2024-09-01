<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Websiteinformation;
use Illuminate\Auth\Access\Response;

class WebsiteinformationPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;

    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Websiteinformation $websiteinformation): bool
    {
        return true;

    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;

    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Websiteinformation $websiteinformation): bool
    {
        return true;

    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Websiteinformation $websiteinformation): bool
    {
        return false;

    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Websiteinformation $websiteinformation): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Websiteinformation $websiteinformation): bool
    {
        //
    }
}
