<?php

namespace App\Models;

use App\Events\RoleCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guarded = false;

    protected $dispatchesEvents = [
        'saved' => RoleCreated::class,
    ];
}
