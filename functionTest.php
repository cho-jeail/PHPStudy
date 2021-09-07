<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>사용자 정의 함수</title>
    </head>
    <body>
        <?php
            function hello() {
                print "<h1>";
                print "Hello! PHP!!";
                print "</h1>";
            }
            
            hello();
            
            $myAge = 18;
            
            function ageCheck($age) {
                $standard = 20;
                $result = ($age >= $standard) ? "성인" : "미성년자";
                print "당신은 $result"."입니다.<br>";
                // 문자열 값을 변수 바로 옆에 붙이면 에러 발생
                // 한칸 띄워주던가 아니면 문자열 더하기를 해줘야한다.
            }
            
            ageCheck($myAge);
            print "<br><br>";
        ?>
        
        <?php
            // 매개변수가 여러개 일때
            function person($name, $birthday) {
                print "이름은 $name"."입니다. <br>생일은 $birthday"."입니다.<br>";
            }

            person("홍길동", "1999.12.12");

            function setHeight($defualtHeight = 100) {
                print "당신의 키는 : $defualtHeight"."cm 입니다. <br>";
            }
            setHeight();
            setHeight(180);
        ?>
        
        <?php
            // return은 다른 언어랑 같다.
            function  sum($x, $y) {
                $total = $x + $y;
                return $total;
            }
            print "152 + 163 = ". sum(152, 163)."<br>";
        ?>
        
        <?php
            // list 활용
            list($a, $b, $c) = array("침착맨", "주호민", "김풍");
            print "첫번째 : $a, 두번째 : $b, 세번째 : $c <br>";
            
            // date()함수 사용
            function getCurrentDate() {
                $year = date('Y');
                $month = date('m');
                $day = date('d');
                return array($year, $month, $day);
            }
            
            list($y, $m, $d) = getCurrentDate();
            print "오늘 날짜는 $y.$m.$d"."입니다.";
        ?>
        
        <p><a href='index.php'>뒤로</a></p>
    </body>
</html>
