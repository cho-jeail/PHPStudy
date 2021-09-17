<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <?php
            session_start();
            
            $id = 'test';
            $pwd = '1q2w3e4r!@';
            $name = '테스터';
            
            if (!empty($_POST['id']) && !empty($_POST['pwd'])) {
                if($_POST['id'] == $id && $_POST['pwd'] == $pwd) {
                    $_SESSION['name'] = $name;
                    header('location:./sessionLoginResult.php');    // direction
                    exit;
                }
            }
            echo '잘못 입력하셨습니다. 다시 로그인 해주세요.<br>';
            echo '<a href=sessionLogin.html>로그인 페이지로</a>';
        ?>
    </body>
</html>
