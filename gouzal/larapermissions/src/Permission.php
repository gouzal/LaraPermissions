<?php

namespace Gouzal\LaraPermissions;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    /**
     * Get the role that owns the permission.
     */
    public function role()
    {
        return $this->belongsTo('App\Role');
    }
}
