<?php
/**
 * @author Robert Pratt <bpong@v8ch.com>
 * @copyright Robert Pratt 2018
 */

namespace V8CH\Combine\Auth\Database;

use Illuminate\Support\Collection;
use V8CH\Combine\Auth\Models\Role;

trait PopulatesRoles
{

    protected function createRole($attributes)
    {
        return factory(Role::class)->create($attributes);
    }

    /**
     * @param $roles
     * @return Collection
     */
    protected function populateRoles($roles)
    {
        return collect($roles)
            ->map(function ($role) {
                return $this->createRole($role);
            });
    }
}
