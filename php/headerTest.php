<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>HTTP 헤더 구조</title>
    </head>
    <body>
        <?php
            // 리다이렉트
            // header("Location:http://www.naver.com");
            // 바로 위의 사이트로 이동된다.
            
            // 파일 다운로드
            // 서버에 있는 test.data 파일을 읽어서 org.data로 다운
            header("Content-type:application/data");
            header("Content-disposition:attachment; filename=org.data");
            readfile("test.data");
        ?>
    </body>
</html>
