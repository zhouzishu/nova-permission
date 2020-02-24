<?php

declare(strict_types=1);

namespace Zhouzishu\NovaPermission;

use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    public function viewAny(): bool
    {
        return true;
    }

    public function view(): bool
    {
        return true;
    }

    public function create(): bool
    {
        return true;
    }

    public function update(): bool
    {
        return true;
    }

    public function delete(): bool
    {
        return false;
    }

    public function restore(): bool
    {
        return true;
    }

    public function forceDelete(): bool
    {
        return true;
    }
}
