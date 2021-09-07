<!DOCTYPE html>
<!--
    사칙 연산, 문자열 추가, 비교 연산자
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>연산자 사용</title>
    </head>
    <body>
        <?php
            $result = 5 + 10;
            print $result;
            print "<br>";
            
            $a = 10;
            $a += 10;
            print $a;
            print "<br>";
            
            $str = "안녕";
            print $str;
            print "<br>";
            
            $str .= "하세요!"; // '.=' 이 문자열 더하기이다.(뒤로 이어준다)
            print $str;
            print "<br>";
            
            // true 일때는 1을 출력, false 일때는 아무것도 출력하지 않는다.
            print (3 == 3);
            print "<br>";
            print true;
            print "<br>";
            
            print (3 == 4);
            print false;
        ?>
        <?php 
            // 3항 연산자
            $age = 19;
            $checkStandard = 20;
            $checkAge = ($age >= $checkStandard) ? "성인" : "미성년자";
            print $checkAge."<br>";
            
            // 오류 미출력 연산자 (@ 입니다.)
            $a = [1, 2, 3];
            print @$a[3];
            
            // 실행 연산자 (운영체제(OS) 명령어 삽입). '아니라 `이다.
            $list = `dir`;
            print "<pre>";
            print $list;
            print "</pre>";
            
            // 증감 연산자
            $cnt = 0;
            print $cnt++."<br>"; // 출력하고 더하기
            print ++$cnt."<br>"; // 더하고 출력하기
            print $cnt--."<br>"; // 출력하고 빼기
            print --$cnt."<br>"; // 빼고 출력하기
            
            // 추가되는 부분만 추가되고 원래있던 값은 유지된다.
            $a = array("name" => "홍길동", "tel" => "123");
            $b = array("name" => "홍길서", "tel" => "456", "address" => "서울");
            
            $c = $a + $b;
            print $c["name"]."<br>";
            print $c["tel"]."<br>";
            print $c["address"]."<br>";
            
            $c = $b + $a;
            print $c["name"]."<br>";
            print $c["tel"]."<br>";
            print $c["address"]."<br>";
            
            print "<p><a href='index.php'>뒤로</a></p>";
        ?>
    </body>
</html>
