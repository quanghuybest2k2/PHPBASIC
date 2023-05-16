<?php
// Enum PHP 5.3
enum Role
{
    const Admin = 'Admin';
    const User = 'User';
    const Manager = 'Manager';
}

class UserRole
{
    private $role;

    public function __construct($role)
    {
        $this->role = $role;
    }

    public function getRole()
    {
        return $this->role;
    }
}

$userRole = new UserRole(Role::Admin);
echo $userRole->getRole();
