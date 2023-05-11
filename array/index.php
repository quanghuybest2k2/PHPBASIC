<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BASIC</title>
    <link rel="shortcut icon" href="https://www.pngitem.com/pimgs/m/20-202195_shark-icon-hd-png-download.png">
    <!-- insert css file -->
</head>
<body>
    <?php
    //print the day
    echo date("l") . "<br>";
    //print the time
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    echo "\nThe time is " . date("h:i:s A");
    ?>
    <hr>
    <table style="background-color:red; border-radius:5px;">
        <tr style="background-color:black; color:white;">
            <th>Services</th>
            <th>Programming Languages</th>
            <th>Rate</th>
        </tr>
        <tr style="background-color:pink;">
            <td>Game</td>
            <td style="background-color:yellow;">Python</td>
            <td>3*</td>
        </tr>
        <tr>
            <td style="background-color:skyblue;">Chat</td>
            <td style="background-color:orange;">Java</td>
            <td style="background-color:violet;">4*</td>
        </tr>
    </table>
    <hr>
        <form action="account.php" method="post">
    <p>Họ tên: <input type="text" name="fullname" placeholder="Tên của bạn"></p>
    <p>Năm sinh: <input type="text" name="namsinh" placeholder="Năm sinh của bạn"></p>
    <p>Đăng ký học: HTML <input type="checkbox" name="check_html" value="HTML">,
     CSS <input type="checkbox" name="check_css" value="CSS">,
    JAVASCRIPT <input type="checkbox" name="check_js" value="JAVASCRIPT"></p>
    <p>Giới tính: Nam <input type="radio" name="gender" value="Nam">, Nữ <input type="radio" name="gender" value="Nữ"></p>
    <p>Thành phố:
        <select name="city">
            <option value="Phan Rang">Phan Rang</option>
            <option value="Hà Nội">Hà Nội</option>
            <option value="Hồ Chí Minh">Hồ Chí Minh</option>
            <option value="Đà Nẵng">Đà Nẵng</option>
            <option value="Cần Thơ">Cần Thơ</option>
        </select>
    </p>
    <p>Lớp: <input type="text" name="lop"></p>
    <p>Tin nhắn:<br>
    <textarea cols="30" rows="7" name="message"></textarea></p>
    <button type="submit">Gửi</button>
</form>
<hr>
    <?php
        $lover = array("Quỳnh", "Như", "Thu", "Lan", "Hoa");
        echo "My lover current is $lover[4], $lover[2]".'<br>';
        echo nl2br("Shark Huy \r tên thật là:\n Đoàn Quang Huy"."<br>");// nl2br(); dùng \r hoặc \n thì xuống dòng.
    ?><br>
    <?php
        $products = array(array('Huy','Thu','Lan',10),array('Duật', 'Thanh','Lộc',4),array('T.Anh','Tâm','Vy',6));
        echo 'Solution 1'.'<br>';
        echo '|'.$products[0][0].'|'.$products[0][1].'|'.$products[0][2].'|'.$products[0][3].'|<br>';
        echo '|'.$products[1][0].'|'.$products[1][1].'|'.$products[1][2].'|'.$products[1][3].'|<br>';
        echo '|'.$products[2][0].'|'.$products[2][1].'|'.$products[2][2].'|'.$products[2][3].'|<br>';
        echo '<br>';
        echo 'Group'.'<br>';
        for($row = 0;$row < 3; $row++){// array cha
            for($column = 0; $column < 4; $column++){//con cua array
                echo '|'.$products[$row][$column];
            }
            echo '|<br>';
        }
    ?>
</body>
</html>