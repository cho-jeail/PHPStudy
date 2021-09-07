<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form 데이터 유효성 검사</title>
        <style>
            .warning {
                color: red;
            }
        </style>
    </head>
    <body>
        <h2>Form 유효성 검사 1</h2>
        <?php
            $nameErr = $emailErr = $genderErr = $websiteErr = "";
            $name = $email = $website = $memo = $gender = "";
            
            function data_check($data) {
                $data = trim($data);                // 공백제거
                $data = stripslashes($data);        // 역슬레쉬(\) 제거
                $data = htmlspecialchars($data);    // HTML 태그 무효화
                return $data;
            }

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                if (empty($_POST['name'])) {
                    $nameErr = "이름을 입력해주세요.";
                }
                else {
                    $name = data_check($_POST['name']);
                    $nameErr = "";
                }
                
                if (empty($_POST['email'])) {
                    $emailErr = "이메일을 입력해주세요.";
                }
                else {
                    $email = data_check($_POST['email']);
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {   // Email 형식의 문자열인지 확인해준다.
                        $emailErr = "이메일 형식에 맞지 않습니다.";
                    }
                    else {
                        $emailErr = "";
                    }
                }
                
                if (empty($_POST['website'])) {
                    $websiteErr = "URL을 입력해주세요.";
                }
                else {
                    $website = data_check($_POST['website']);
                    if (!filter_var($website, FILTER_VALIDATE_URL)) {   // URL 주소 형식이 맞는지 확인해준다.
                        $websiteErr = "URL 형식에 맞지 않습니다.";
                    }
                    else {
                        $websiteErr = "";
                    }
                }
                $memo = data_check($_POST['memo']);
                $gender = data_check($_POST['gender']);
            }
        ?>
        <form name="form1" action="<?=$_SERVER['PHP_SELF']?>" method="post">
            이름 : <input type="text" name="name"><span class="warning"><?=$nameErr?></span><br>
            이메일 : <input type="text" name="email"><span class="warning"><?=$emailErr?></span><br>
            홈페이지 : <input type="text" name="website"><span class="warning"><?=$websiteErr?></span><br>
            코멘트 : <textarea name="memo" rows="5" cols="10"></textarea><br>
            성별 : <input type="radio" name="gender" value="man" checked="">남자
            <input type="radio" name="gender" value="woman">여자<br>
            <input type="submit" value="전송">
        </form>
        <br>
        <?php
            echo '----- 입력 사항 -----<br>';
            echo $name."<br>";
            echo $email."<br>";
            echo $website."<br>";
            echo $memo."<br>";
            echo $gender."<br>";
        ?>
        
        <p><a href="index.php">뒤로</a></p>
    </body>
</html>
