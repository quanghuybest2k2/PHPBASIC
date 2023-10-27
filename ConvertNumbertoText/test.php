<?php
function numberTowords($num)
{

    $ones = array(
        0 => "KHÔNG",
        1 => "MỘT",
        2 => "HAI",
        3 => "BA",
        4 => "BỐN",
        5 => "NĂM",
        6 => "SÁU",
        7 => "BẢY",
        8 => "TÁM",
        9 => "CHÍN",
        10 => "MƯỜI",
        11 => "MƯỜI MỘT",
        12 => "MƯỜI HAI",
        13 => "MƯỜI BA",
        14 => "MƯỜI BỐN",
        15 => "MƯỜI LĂM",
        16 => "MƯỜI SÁU",
        17 => "MƯỜI BẢY",
        18 => "MƯỜI TÁM",
        19 => "MƯỜI CHÍN",
        "014" => "MƯỜI BỐN"
    );
    $tens = array(
        0 => "KHÔNG",
        1 => "MƯỜI",
        2 => "HAI MƯƠI",
        3 => "BA MƯƠI",
        4 => "BỐN MƯƠI",
        5 => "NĂM MƯƠI",
        6 => "SÁU MƯƠI",
        7 => "BẢY MƯƠI",
        8 => "TÁM MƯƠI",
        9 => "CHÍN MƯƠI"
    );
    $hundreds = array(
        "TRĂM",
        "NGHÌN",
        "TRIỆU",
        "TỶ",
        "NGÀN TỶ",
        "NGHÌN TRIỆU TỶ"
    ); /* giới hạn tới nghìn tỷ */
    $num = number_format($num, 2, ".", ",");
    $num_arr = explode(".", $num);
    $wholenum = $num_arr[0];
    $decnum = $num_arr[1];
    $whole_arr = array_reverse(explode(",", $wholenum));
    krsort($whole_arr, 1);
    $rettxt = "";
    foreach ($whole_arr as $key => $i) {

        while (substr($i, 0, 1) == "0")
            $i = substr($i, 1, 5);
        if ($i < 20) {
            /* echo "getting:".$i; */
            $rettxt .= $ones[$i];
        } elseif ($i < 100) {
            if (substr($i, 0, 1) != "0") $rettxt .= $tens[substr($i, 0, 1)];
            if (substr($i, 1, 1) != "0") $rettxt .= " " . $ones[substr($i, 1, 1)];
        } else {
            if (substr($i, 0, 1) != "0") $rettxt .= $ones[substr($i, 0, 1)] . " " . $hundreds[0];
            if (substr($i, 1, 1) != "0") $rettxt .= " " . $tens[substr($i, 1, 1)];
            if (substr($i, 2, 1) != "0") $rettxt .= " " . $ones[substr($i, 2, 1)];
        }
        if ($key > 0) {
            $rettxt .= " " . $hundreds[$key] . " ";
        }
    }
    if ($decnum > 0) {
        $rettxt .= " and ";
        if ($decnum < 20) {
            $rettxt .= $ones[$decnum];
        } elseif ($decnum < 100) {
            $rettxt .= $tens[substr($decnum, 0, 1)];
            $rettxt .= " " . $ones[substr($decnum, 1, 1)];
        }
    }
    return $rettxt;
}

extract($_POST);
if (isset($convert)) {
    echo "<p align='center' style='color:blue'>" . numberTowords("$num") . "</p>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Conver Number to Words in PHP</title>
</head>
<body>
<form method="post">
    <table border="0" align="center">
        <tr>
            <td>Enter Your Numbers</td>
            <Td><input type="text" name="num" value="<?php if (isset($num)) {
                    echo $num;
                } ?>"/></Td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Chuyển số sang chữ" name="convert" min="1"/>
            </td>
        </tr>
    </table>
</form>

</body>
</html>