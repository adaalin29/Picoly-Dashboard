<?php

namespace App;

class Permissions
{
    /*
    |--------------------------------------------------------------------------
    | Save all permissions here so that if we want to change the permission's name we don't need to change all code
    | Basically we do aliases: const PERMISSION_NAME = 'Permission name that is used in the admin pannel';
    | Usage: optional(backpack_auth()->user()->can(\App\Permissions::PERMISSION_NAME)
    |--------------------------------------------------------------------------
    */

    // Restaurant permissions
    const MANAGE_ALL_RESTAURANTS = 'Manage all restaurants';

}
