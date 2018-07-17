<?php

namespace App\Policies;

use App\Entity\User;
use App\Entity\Currency;
use Illuminate\Auth\Access\HandlesAuthorization;

class CurrencyPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the currency.
     *
     * @param  \App\Entity\User  $user
     * @param  \App\Entity\Currency  $currency
     * @return mixed
     */
    public function update(User $user, Currency $currency)
    {
        return $user->is_admin;
    }
}
