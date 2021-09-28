<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>전송 테스트</title>
    </head>
    <body>
        <?php
            // $_GET["파라미터 이름"] : GET 메소드를 통해 송신된 데이터만을 받는 변수
            // $_POST["파라미터 이름"] : POST 메소드를 통해 송신된 데이터만을 받는 변수
            // $_REQUEST["파라미터 이름"] : GET 또는 POST 메소드로 송신된 데이터를 받는 변수
            $name = $_POST["userName"]."<br>";
            print $name;
            $name = $_REQUEST["userName"];
            print $name;
        ?>
        <p><a href="../html/formTest.html">뒤로</a></p>
    </body>
</html>
