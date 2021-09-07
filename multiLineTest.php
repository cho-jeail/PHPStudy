<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>멀티라인 및 히든 데이터 수신</title>
    </head>
    <body>
        <?php
            echo $_POST['name']."의 메시지<br><br>";
            echo '메시지 : ';
            echo nl2br($_POST['memo'])."<br><br>";
            echo "숨겨진 메시지 : ".$_POST['hiddenText']."<br>";
        ?>
        <p><a href="multiLineTest.html">뒤로</a></p>
    </body>
</html>
