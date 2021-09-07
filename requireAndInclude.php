<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>require과 include</title>
    </head>
    <body>
        <?php
            /*
             * require : 자주 사용하는 PHP코드를 다른 파일에 모아두고 필요할 때 파일을
             *          읽어 사용할 수 있게 해주는 것.
             * 
             * require("파일 이름"); // 파일 이름에는 경로도 포함할 수 있다.
             * require "파일 이름";
             * require $변수; // 변수에 파일 이름을 입력하였을 경우;
             * 
             * 1. 지정된 파일이 존재하지 않을 경우에는 
             *    php.ini에 설정된 include_path에서 파일을 찾는다.
             * 2. include_path에도 파일이 존재하지 않는다면
             *    require문을 작성한 현재 파일이 있는 디렉토리에서 찾는다.
             * 3. 현재 디렉토리에도 없다면 오류를 표시하고 정지한다.
             * 
             * require과 inclue의 차이점
             * require문은 오류가 발생했을 경우에 Fatal Error가 되어 정지가 되고,
             * include문은 오류가 발생했을 경우에 Warning을 출력하고 처리코드를 수행한다.
             * 
             * require_once() : 지정된 파일을 한 번 읽으면 같은 처리 중에는 다시 읽을 수 없다.
             * include_once() : 지정된 파일을 이미 읽힌 경우에는 다시 파일을 읽지 않는다.
             */
        
            // require 'testData.php';
            include 'testData.php';
            
            print "아이디 : $id<br>";
            print "이름 : $name<br>";
            print "주소 : $address<br>";
            
            print "<p><a href='index.php'>뒤로</a></p>";
        ?>
    </body>
</html>
