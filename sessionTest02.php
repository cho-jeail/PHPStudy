<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>송신받은 값 session 저장 후 페이지 이동</title>
    </head>
    <body>
        <?php
            session_start();
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['msg'] = $_POST['msg'];
            if(isset($_POST['id'])) {
                $_SESSION['id'] = $_POST['id'];
            }
        ?>
        <h2>송신받은 데이터 전달</h2>
        name : <?=$_SESSION['name']?><br>
        msg : <?= nl2br($_SESSION['msg'])?><br><br><br>
        <form name="form" action="sessionTest02result.php" method="post">
            이름 : <?=$_POST['name']?><br>
            메시지 : <br>
            <?=nl2br($_POST['msg'])?><br>
            <input type="submit" value="확인" name="confirm">
            <input type="submit" value="돌아가기" name="back">
        </form>
    </body>
</html>
