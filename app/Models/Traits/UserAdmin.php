<?php

namespace Bpocallaghan\Titan\Models\Traits;

use Bpocallaghan\Titan\Models\Role;

trait UserAdmin
{
    /**
     * If User is base admin
     * On /admin login validation and all /admin navigation
     * @return bool
     */
    public function isAdmin()
    {
        return $this->hasRole(Role::$BASE_ADMIN);
    }

    /**
     * If User is admin
     * @return bool
     */
    public function isSuperAdmin()
    {
        return $this->hasRole(Role::$ADMIN_SUPER);
    }

    /**
     * If User is admin
     * @return bool
     */
    public function isDeveloper()
    {
        return $this->hasRole(Role::$DEVELOPER);
    }
}