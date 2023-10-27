<?php
// https://www.php.net/manual/en/function.preg-match.php
$phone = "0859476122"; // chuỗi gần so khớp
// ố đầu 0, các số tiếp theo từ 0-9, độ dài 9
$pattern = "/^0[0-9]{9}$/"; // khuôn mẫu

$check = preg_match($pattern, $phone);
//var_dump($check); // 1 true, 0 false
if (!empty($check)) {
    echo 'Số điện thoại ' . $phone . ' hợp lệ';
} else {
    echo "Số điện thoại không hợp lệ";
}
// /0([0-9]{9})