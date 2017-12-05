<?php

namespace App\Policies;

use App\User;
use App\Models\Family;
use Illuminate\Auth\Access\HandlesAuthorization;

class FamilyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the family.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Family  $family
     * @return mixed
     */
    public function view(User $user, Family $family)
    {
        return $user->campaign->id == $family->campaign_id &&
            ($family->is_private ? !$user->viewer() : true);
    }

    /**
     * Determine whether the user can create families.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return ($user->member());
    }

    /**
     * Determine whether the user can update the family.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Family  $family
     * @return mixed
     */
    public function update(User $user, Family $family)
    {
        return $user->campaign->id == $family->campaign_id &&
            ($user->member());
    }

    /**
     * Determine whether the user can delete the family.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Family  $family
     * @return mixed
     */
    public function delete(User $user, Family $family)
    {
        return $user->campaign->id == $family->campaign_id &&
            ($user->member());
    }
    /**
     * Determine if a model can be moved to another type.
     *
     * @param User $user
     * @param Family $family
     * @return mixed
     */
    public function move(User $user, Family $family)
    {
        return $this->update($user, $family);
    }
}
