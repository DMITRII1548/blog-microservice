<?php

namespace App\Events;

use App\Models\Role;
use Illuminate\Queue\SerializesModels;

class RoleCreated
{
    use SerializesModels;

    public Role $role;

    /**
     * Create a new event instance.
     */
    public function __construct(Role $role)
    {
        $this->role = $role;
    }
}
