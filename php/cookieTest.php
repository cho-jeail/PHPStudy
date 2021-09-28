<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>COOKIE Test</title>
    </head>
    <body>
        <?php
            // 쿠기 생성 / 확인 / 삭제
//            setcookie("testCookie", "1234", time() + 60);
//            print $_COOKIE['testCookie'].'<br>';
//            setcookie("testCookie", "", 0);
            
            $count = 1;
            if(isset($_COOKIE['count'])) {
                $count = $_COOKIE['count'];
                $count++;
            }
            setcookie("count", $count, time() + 10);
        ?>
        <h2>쿠키 테스트하기</h2>
        <?php
            if($count == 1) {
                ?>
                첫번째 방문입니다.<br><br>
                쿠키 정보가 없습니다.<br>
                새로고침을 하세요.<br>
                <?php
            }
            else {
                ?>
                당신은 <?=$count?>번째 방문입니다.<br>
                <br>
                10초 이내에 새로고침을 하면 카운트가 올라갑니다.
                <?php
            }
        ?>
        <a href="../index.php">목록으로</a>
    </body>
</html>
