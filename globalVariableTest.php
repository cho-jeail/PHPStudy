<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>변수의 유효범위</title>
    </head>
    <body>
        <?php
            /*
             * 슈퍼 글로벌 변수
             * $GLOBALS : 모든 전역 변수의 배열
             * $_SERVER : 서버 환경 변수의 배열
             * $_ENV : 환경 변수의 배열
             * $_COOKIE : 쿠키 변수의 배열
             * $_GET : GET 메소드로 넘어온 변수의 배열
             * $_POST : POST 메소드로 넘어온 변수의 배열
             * $_FILES : 파일 업로드와 관련된 변수의 배열
             * $_REQUEST : 사용자가 입력한 변수의 배열
             * $_SESSION : 세션 변수의 배열
             */
        
            $test = 100;    // 전역 변수
            
            function test() {
                global $test;
                print $test."<br>";
            }
            
            print $test."<br>";
            test();
            
            $data = 1;
            function scopeTest() {
                $GLOBALS['data'] += 1;
                print $GLOBALS['data']."<br>";
            }
            
            scopeTest();
            print $data."<br>";
            
            // 함수내 맴버 변수를 전역 변수처럼 사용하기(static)
            function test2() {
                static $a = 10;
                print "변수 a = ".$a."<br>";
                $a++;
            }
            test2();
            test2();
        ?>
        <p><a href="index.php">뒤로</a></p>
    </body>
</html>
