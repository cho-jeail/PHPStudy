<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Result</title>
    </head>
    <body>
        <?php
            session_start();
            echo $_SESSION['name']."님 어서오세요. 반갑습니다.<br>";
        ?>
        <a href="sessionLogout.php">로그아웃</a>
    </body>
</html>
