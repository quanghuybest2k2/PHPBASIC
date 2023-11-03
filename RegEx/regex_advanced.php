<?php
// Kiểm tra địa chỉ email hợp lệ:
$email = "example@email.com";
if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/", $email)) {
    echo "Địa chỉ email hợp lệ.";
} else {
    echo "Địa chỉ email không hợp lệ.";
}
// Tìm và thay thế các từ trong một chuỗi:
$text = "PHP là một ngôn ngữ lập trình mạnh mẽ. PHP được sử dụng rộng rãi trong phát triển web.";
$newText = preg_replace("/PHP/", "JavaScript", $text);
echo $newText;
// Tìm kiếm và trích xuất các URL từ một văn bản:
$text = "Đây là một địa chỉ URL: http://www.example.com và https://example.org.";
preg_match_all("/https?:\/\/\S+/", $text, $matches);
print_r($matches[0]);
// Kiểm tra mật khẩu mạnh (ít nhất 8 ký tự, ít nhất một chữ hoa, một chữ thường và một chữ số):
$password = "Abcd1234";
if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/", $password)) {
    echo "Mật khẩu mạnh.";
} else {
    echo "Mật khẩu yếu.";
}
// Tách các từ từ một chuỗi:
$text = "PHP là một ngôn ngữ lập trình mạnh mẽ";
$words = preg_split("/\s+/", $text);
print_r($words);
