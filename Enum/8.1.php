<?php
/*
* Enum PHP 8.1
* docs: https://www.php.net/manual/en/language.types.enumerations.php
*/
enum Role
{
    case Admin;
    case User;
    case Manager;
}

class UserRole
{
    private Role $role;

    public function __construct(Role $role)
    {
        $this->role = $role;
    }

    public function getRole(): string
    {
        return match ($this->role) {
            Role::Admin => 'Admin',
            Role::User => 'User',
            Role::Manager => 'Manager',
        };
    }
}

$userRole = new UserRole(Role::User);
echo $userRole->getRole();
