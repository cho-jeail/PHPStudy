<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Constant Test</title>
    </head>
    <body>
        <?php
            // 상수 정의하기 및 기본 정보 출력
            define("HI", "안녕");
            print HI;

            print"<br>현제 사용중인 PHP버전은? ";
            print PHP_VERSION;

            print"<br>이 파일의 경로는? ";
            print __FILE__;

            print "<br>수행 중에 있는 코드 라인 넘버는? ";
            print __LINE__;
            
            print"<p><a href='index.php'>뒤로</a></p>";
        ?>
    </body>
</html>
