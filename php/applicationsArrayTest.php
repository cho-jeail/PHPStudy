<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>연관 배열 및 다차원 배열 사용</title>
    </head>
    <body>
        <?php
            // 연관 배열 (키값과 벨루값이 있다).
            $member["name"] = "홍길동";
            $member["age"] = 28;
            
            print $member["name"];
            print "<br>";
            print $member["age"];
            print "<br><br>";
            
            $data = array("name" => "홍길준", "age" => 20, "address" => "서울");
            print $data["name"];
            print "<br>";
            print $data["age"];
            print "<br>";
            print $data["address"];
            print "<br><br>";
            
            // 다차원 배열
            $member[] = array("name" => "김OO", "age" => 20, "tel" => "010-1111-1111");
            $member[] = array("name" => "박OO", "age" => 50, "tel" => "010-2222-2222");
            $member[] = array("name" => "서OO", "age" => 30, "tel" => "010-3333-3333");
            // 미리 정의되어 있는 data에 덮어 씌울수 있음.
            // 위와 달리 아래와 같이도 표현 가능.
            $member = array(
                array("name" => "김OO", "age" => 20, "tel" => "010-1111-1111"),
                array("name" => "박OO", "age" => 50, "tel" => "010-2222-2222"),
                array("name" => "서OO", "age" => 30, "tel" => "010-3333-3333")
            );
            
            print $member[0]["name"];
            print "<br>";
            print $member[1]["age"];
            print "<br>";
            print $member[2]["tel"];
            print "<br><br>";
            
            print "<p><a href='../index.php'>뒤로</a></p>";
        ?>
    </body>
</html>
