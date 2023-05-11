<?php
// url tuyệt đối của file hiện tại
echo __DIR__;
echo "<br/>";
$url = "https://github.com/quanghuybest2k2?tab=repositories";
$parsedUrl = parse_url($url);
echo $url;
echo "<br/>";
if (empty($url)) {
    echo "URL trống";
} else {
    echo $parsedUrl['scheme'];
    echo "<br/>";
    echo $parsedUrl['host'];
    echo "<br/>";
    echo $parsedUrl['path'];
    echo "<br/>";
    echo $parsedUrl['query'];
    echo "<br/>";
}
$params = array(
    'page' => 1,
    'tab' => 'repositories'
);

$queryString = http_build_query($params);
echo 'https://github.com/quanghuybest2k2?' . $queryString;
//// Chuyển hướng đến trang khác
//header("Location: https://github.com/quanghuybest2k2");
//exit;

