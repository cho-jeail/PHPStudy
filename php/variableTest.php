<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>변수 사용 방법</title>
    </head>
    <body>
        <?php
            // 아래와 같이 '$[변수명] = 값;' 형태이다.
            $text = "데이타";
            print $text;
            
            print "<br>";
            
            $text = 100; // 자료형의 변환이 자동으로 잡힌다.
            print $text;
            
            print"<p><a href='../index.php'>뒤로</a></p>";
        ?>
    </body>
</html>
