<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>데이터 전달받기</title>
    </head>
    <body>
        <?php
            session_start();
            
            if(isset($_POST['confirm'])) {
                print $_SESSION['name']."님의 메시지.<br><br>";
                print "메시지 : <br>";
                print nl2br($_SESSION['msg']);
                print "<br><br>";
                print_r($_SESSION);
            }
            elseif(isset($_POST['back'])) {
                ?>
                <h2>데이터 재송신</h2>
                <form name="form" action="sessionTest02.php" method="post">
                    이름 : <input type="text" name="name" value="<?=$_SESSION['name']?>"><br>
                    메세지 : <br>
                    <textarea name="msg" cols="50" rows="5"><?=$_SESSION['msg']?></textarea>
                    <input type="submit" value="재송신">
                </form>
                <?php
            }
            else {
                ?>
                오류 발생.
                <a href="sessionTest02.html">첫 페이지로</a>
                <?php
            }
        ?>
        <br><br>
        <a href="index.php">목록으로</a>
    </body>
</html>
