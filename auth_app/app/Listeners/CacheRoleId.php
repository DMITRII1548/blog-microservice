<?php

namespace App\Listeners;

use App\Events\RoleCreated;
use Illuminate\Support\Facades\Cache;

class CacheRoleId
{
    /**
     * Handle the event.
     */
    public function handle(RoleCreated $roleCreatedEvent): void
    {
        $roleId = $roleCreatedEvent->role->id;
        $roleTitle = $roleCreatedEvent->role->title;

        Cache::put($roleTitle . '-role-id', $roleId);
    }
}
