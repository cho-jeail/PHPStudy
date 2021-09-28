<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>반복문(while, for)</title>
    </head>
    <body>
        <?php
//            // 기본 while문
//            $i = 0;
//            while ($i <= 10) {
//                print $i++;
//                print "<br>";   
//            }
//            
//            // do~while 문
//            $i = 0;
//            do {
//                print $i++;
//                print "<br>";
//            } while ($i <= 10);
//        
//            // for문
//            for ($i = 1; $i < 10; $i++){
//                print $i."번<br>";   
//            }
            // 출력문이 너무 많아서 주석 처리하였다.
            
            // for문과 foreach문을 이용한 배열 다루기
            $fruit = array("사과", "오렌지", "바나나", "포도", "딸기", "복숭아", "수박");
            for ($i = 0; $i < count($fruit); $i++) {
                print $fruit[$i]."<br>";
            }
            $select = "<select name='fruit'>\n";
            for ($i = 0; $i < count($fruit); $i++) {
                $select .= "<option value='$i'>$fruit[$i]</option>\n";
            }
            $select .= "</select>";
            print $select."<br>";
            
            $names = ["침착맨", "주호민", "김풍"];
            foreach ($names as $name) {
                print $name." ";   
            }
            print "<br><br>";
            
            // foreach문을 이용하여 연관배열 다루기 및 continue / break
            $person = ["name" => "홍길동", "gender" => "남자", "tel" => "010-1111-1111"];
            
            foreach ($person as $key => $value) {
                print "$key : $value <br>";
            }
            
            foreach ($person as $key => $value) {
                if ($key == "name") {
                    $a = "이름";
                }
                else if ($key == "gender") {
                    $a = "성별";
                }
                else if ($key == "tel") {
                    $a = "전화번호";
                }
                print "$a : $value <br>";
            }
            
            // continue와 break
            $a = ["name" => "홍길동", "id" => "hong", "pw" => 1234, "address" => "서울"];
            
            foreach ($a as $key => $value) {
                if ($key == "name")
                    $title = "이름";
                else if ($key == "id")
                    $title = "아이디";
                else if ($key == "pw")
                    $title = "비밀번호";
                else
                    continue; // 이 분기를 넘겨버린다.
                
                print "$title : $value <br>";
            }
            
            foreach ($a as $key => $value) {
                if ($key == "name")
                    $title = "이름";
                else if ($key == "id")
                    $title = "아이디";
                else if ($key == "pw")
                    break; // 이 시점에서 반복문은 중단된다.
                else
                    $title = "주소";
                
                print "$title : $value <br>";
            }
            
            print "<p><a href='../index.php'>뒤로</a></p>";
        ?>
    </body>
</html>
