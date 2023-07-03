<?php
$subject = 'quanghuybest@gmail.com';
$pattern = '/[a-z]/'; // từ a -> z (chữ thường)

$check = preg_match($pattern, $subject);

var_dump($check);