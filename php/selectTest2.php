<!DOCTYPE html>
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
        <p><a href="../html/selectTest2.html">뒤로</a></p>
    </body>
</html>
