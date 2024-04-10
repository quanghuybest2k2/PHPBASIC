<?php

function getEnvVar($name)
{
    $filename = ".env";

    if (!file_exists($filename)) {
        return "Không tồn tại tệp $filename";
    }
    $env = parse_ini_file($filename);
    if (!isset($env[$name])) {
        return "Không có giá trị '$name' trong tệp $filename<br/>";
    }
    return $env[$name];
}

echo "host name: " . getEnvVar("HOST");
echo "<br/>";
echo "username: " . getEnvVar("USERNAME");
echo "<br/>";
echo "password: " . getEnvVar("PASSWORD") . "no password";
echo "<br/>";
echo "database name: " . getEnvVar("DB_NAME");
echo "<br/>";
echo getEnvVar("ABC");
