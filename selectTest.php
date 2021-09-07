<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>select 데이터 수신</title>
    </head>
    <body>
        <?php
//            if(isset($_POST['selectList'])) { //isset()을 이용할 경우 ""빈값이 넘어오므로 여기서 사용은 맞지않다.
            if($_POST['selectList'] != "") {
                echo '선택된 지역은 '.$_POST['selectList']."입니다.<br>";
            }
            else {
                echo "지역이 선택되지 않았습니다.<br>";
            }
        ?>
        <p><a href="selectTest.html">뒤로</a></p>
    </body>
</html>
