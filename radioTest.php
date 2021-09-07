<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>라디오 버튼 수신 테스트</title>
    </head>
    <body>
        <?php
            if(isset($_POST['gender'])) {
                echo "선택된 성별은 ".$_POST['gender']."입니다.<br>";
            }
            else {
                echo '선택된 성별이 없습니다.';
            }
        ?>
        <p><a href="radioTest.html">뒤로</a></p>
    </body>
</html>
