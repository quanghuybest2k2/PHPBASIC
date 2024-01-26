<?php
$filename = '.env';
if (file_exists($filename)) {
    $env = parse_ini_file('.env');
    $name = $env["NAME"];
    echo $name;
} else {
    echo "Không tồn tại tệp $filename";
}
