<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>체크박스 데이터 수신</title>
    </head>
    <body>
        <?php
            if(isset($_POST['hobby'])) {    // isset 함수는 변수가 설정되었는지를 확인하는 함수. true / false 반환
                // 데이터가 잘 넘어오는지 확인.
//                print_r($_POST['hobby']);
                $hobby = implode(", ", $_POST['hobby']);
                echo "선택된 취미는 ".$hobby."입니다.<br>";
            }
            else {
                print '취미가 없습니다.<br>';
            }
        ?>
        <p><a href="checkboxTest.html">뒤로</a></p>
    </body>
</html>
