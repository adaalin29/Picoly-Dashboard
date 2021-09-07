<?php

namespace App\Policies;

use App\Models\BackpackUser;
use App\Models\Restaurant;
use Illuminate\Auth\Access\HandlesAuthorization;

class RestaurantPolicy
{
    use HandlesAuthorization;

    /**
     * Allow access to all restaurants to admin
     *
     * @param  \Backpack\Base\app\Models\BackpackUser  $user
     * @param  \App\Models\Restaurant  $restaurant
     * @return mixed
     */
    public function before(BackpackUser $user, $ability)
    {
        if ($user->can(\App\Permissions::MANAGE_ALL_RESTAURANTS)) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the restaurant.
     *
     * @param  \Backpack\Base\app\Models\BackpackUser  $user
     * @param  \App\Models\Restaurant  $restaurant
     * @return mixed
     */
    public function view(BackpackUser $user, Restaurant $restaurant)
    {
        return $user->restaurants()->where('id', $restaurant->id)->exists();
    }

    /**
     * Determine whether the user can create restaurants.
     *
     * @param  \Backpack\Base\app\Models\BackpackUser  $user
     * @return mixed
     */
    public function create(BackpackUser $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the restaurant.
     *
     * @param  \Backpack\Base\app\Models\BackpackUser  $user
     * @param  \App\Models\Restaurant  $restaurant
     * @return mixed
     */
    public function update(BackpackUser $user, Restaurant $restaurant)
    {
        return $user->restaurants()->where('id', $restaurant->id)->exists();
    }

    /**
     * Determine whether the user can delete the restaurant.
     *
     * @param  \Backpack\Base\app\Models\BackpackUser  $user
     * @param  \App\Models\Restaurant  $restaurant
     * @return mixed
     */
    public function delete(BackpackUser $user, Restaurant $restaurant)
    {
        return $user->restaurants()->where('id', $restaurant->id)->exists();
    }
}
