<?php
/* Sự khác nhau giữa toàn tử ?? và ?
 *  ? là toán tử điều kiện trả về 1 toán hạng ĐẦU TIÊN nếu true và nếu false thì trả về toán hạng thứ 2.
 *  ?? trả về 1 toán hạng ĐẦU TIÊN nếu khác null hoặc undefine.
 */

// ví dụ ??
$a = null;

$b = 5;

echo $a ?? $b; // 5

// vì biến $a = null nên bỏ qua, nhưng $b lại không null hoặc undefine nên đúng
$a = 6;

echo $a ?? $b; // 6
// Biến $a bây giờ = 6 (có giá trị) nên nên đúng

// ví dụ ?

$c = 6;

$d = 12;

echo $c < 0 ? 'a' : 'b'; // b

// Kết lại:
/*
 * Toán tử ?? chỉ dùng để xác định giá trị có null hoặc undefine hay không
 * Nếu dùng nhiều câu lệnh rẻ nhánh thì dùng toán tử ?
 */
