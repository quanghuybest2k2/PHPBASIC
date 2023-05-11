<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tổ tư vấn</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h1>Tổ tư vấn Khóa Học HTML & CSS</h1>
        <p>Họ tên: <?php if(isset($_POST["fullname"])) { echo $_POST["fullname"]; } ?></p>
        <p>Năm sinh: <?php if(isset($_POST["namsinh"])) { echo $_POST["namsinh"]; } ?></p>
        <p>Đăng ký học: <?php if(isset($_POST["check_html"])) { echo $_POST["check_html"]; } ?>
        <?php if(isset($_POST["check_css"])) { echo $_POST["check_css"];} ?>
        <?php if(isset($_POST["check_js"])) { echo $_POST["check_js"];} ?></p>
        <p>Giới tính: <?php if(isset($_POST["gender"])) { echo $_POST["gender"]; } ?></p>
        <p>Thành phố: <?php if(isset($_POST["city"])) { echo $_POST["city"]; } ?></p>
        <p>Lớp: <?php if(isset($_POST["lop"])) {echo $_POST["lop"];} ?></p>
        <p>Tin nhắn: <?php if(isset($_POST["message"])) { echo $_POST["message"]; } ?></p>
    </div>

</body>
</html>