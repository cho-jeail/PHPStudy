<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Select 다중 데이터 수신</title>
    </head>
    <body>
        <?php
            if(isset($_POST['subjects'])) {
                print_r($_POST['subjects']);
            }
            else {
                echo '선택되지 않았습니다.<br>';
            }
        ?>
        <p><a href="selectTest2.html">뒤로</a></p>
    </body>
</html>
