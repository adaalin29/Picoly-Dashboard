<?php

namespace App\Models;

use App\User;
use Backpack\Base\app\Models\Traits\InheritsRelationsFromParentModel;
use Backpack\Base\app\Notifications\ResetPasswordNotification as ResetPasswordNotification;
use Backpack\CRUD\CrudTrait;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Restaurant;

class BackpackUser extends User
{
    use InheritsRelationsFromParentModel;
    use CrudTrait; 
    use HasRoles;
  
    protected $table = 'users';

    /**
     * Send the password reset notification.
     *
     * @param string $token
     *
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

    /**
     * Get the e-mail address where password reset links are sent.
     *
     * @return string
     */
    public function getEmailForPasswordReset()
    {
        return $this->email;
    }
  public function reseller_restaurants(){
        return $this->hasMany(Restaurant::class, 'id_reseller', 'id');
    }
}
