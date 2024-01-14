<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Đoàn Quang Huy!</h1>');
// xem pdf
$mpdf->Output();
// xuất pdf
// $mpdf->Output('output.pdf', 'F');
