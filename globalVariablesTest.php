<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>$_SERVER 슈퍼 변수의 사용법</title>
    </head>
    <body>
        <?php
            // $_SERVER는 헤더, 경로, 스크립트의 위치에 대한 정보를 담고 있는 슈퍼 전역변수
            echo $_SERVER['DOCUMENT_ROOT']."<br>";              // 현재 사이트의 서버상 위치
            echo $_SERVER['SCRIPT_NAME']."<br>";                // 실행되고 파일명
            echo $_SERVER['SCRIPT_FILENAME']."<br><br>";        // 실행되고 있는 위치와 파일명
            
            echo $_SERVER['SERVER_NAME']."<br>";                // 사이트 도메인
            echo $_SERVER['SERVER_PORT']."<br>";                // 서버가 사용중인 포트 번호
            echo $_SERVER['SERVER_SOFTWARE']."<br>";            // 서버의 소프트웨어 환경 정보
            echo $_SERVER['SERVER_PROTOCOL']."<br><br>";        // 서버의 프로토콜 정보
            
            echo $_SERVER['REMOTE_ADDR']."<br>";                // 사이트 접속한 사용자 IP
            echo $_SERVER['GATEWAY_INTERFACE']."<br><br>";      // CGI 정보
            
            echo $_SERVER['HTTP_HOST']."<br>";                  // 서버 도메인과 포트정보
            echo $_SERVER['HTTP_USER_AGENT']."<br>";            // 사이트 접속한 사용자의 환경
            echo $_SERVER['HTTP_ACCEPT_ENCODING']."<br>";       // 인코딩 방식
            echo $_SERVER['HTTP_ACCEPT_LANGUAGE']."<br><br>";   // 언어
            
            echo $_SERVER['REQUEST_URI']."<br>";                // 현재 페이지의 주소에서 도메인만 제외
            echo $_SERVER['PHP_SELF']."<br><br><br>";           // 현재 페이지의 주소에서 도메인과 파라미터값 제외
        ?>
        
        <!-- 사이에 php변수 사용시 아래와 같이 사용한다. -->
        <form name="form1" action="<?=$_SERVER['PHP_SELF']?>" method="post">
            이름 : <input type="text" name="fname">
            <input type="submit" value="전송">
        </form>
        
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') { // request의 메소드가 무엇인지 알려주는 슈퍼 변수
                $name = $_REQUEST['fname'];
                if (empty($name)) {
                    echo '이름이 없습니다.<br>';
                }
                else {
                    echo $name."<br>";
                }
            }
            else {
                echo 'POST 방식으로 보내세요.<br>';
            }
        ?>
        
        <form name="form2" action="<?=$_SERVER['PHP_SELF']?>" method="get">
            이름 : <input type="text" name="name">
            이메일 : <input type="text" name="email">
            <input type="submit" value="전송">
        </form>
        
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                if (!empty($_GET['name']) && !empty($_GET['email'])) {
                    print "이름 : ".$_GET['name']."<br>";
                    print "이메일 : ".$_GET['email']."<br>";
                }
                else {
                    print '이름과 이메일이 없습니다.<br>';
                }
            }
            else {
                print 'GET 방식으로 보내야 합니다.';
            }
        ?>
        
        <p><a href="index.php">뒤로</a></p>
    </body>
</html>
