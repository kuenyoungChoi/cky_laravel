<?php

namespace App\Observers\User;

use App\Events\User\UserEvent;
use App\Models\User\User;

class UserObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User\User  $user
     * @return void
     */
    public function created(User $user)
    {
    //
    }

    /**
     * Handle the User "updated" event.
     *
     * @param  \App\Models\User\User  $user
     * @return void
     */
    public function updated(User $user)
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param  \App\Models\User\User  $user
     * @return void
     */
    public function deleted(User $user)
    {
        //
    }

    /**
     * Handle the User "restored" event.
     *
     * @param  \App\Models\User\User  $user
     * @return void
     */
    public function restored(User $user)
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param  \App\Models\User\User  $user
     * @return void
     */
    public function forceDeleted(User $user)
    {
        //
    }
}
