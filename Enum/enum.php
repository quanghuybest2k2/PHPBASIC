<?php

enum RoleAccount: int
{
    case Admin = 1;
    case employee = 2;
    case customer = 3;
    case guide = 4;
}
echo RoleAccount::guide->name;
echo "<br/>";
echo RoleAccount::guide->value;