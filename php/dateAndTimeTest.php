<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>날짜 및 시간 함수</title>
    </head>
    <body>
        <?php
            // time() : 1970 / 01 / 01 부터 현재 이 함수가 실행되는 시점까지 초로 환산
            $now = time();
            print $now."<br>";
            
            // mktime() : 날짜(문자열)에서 UNIX 타임 스탬프를 구하는 함수
            // mktime(시간, 분, 초, 월, 일, 년)
            $timeStamp = mktime(0, 0, 0, 12, 7, 2016);
            print $timeStamp."<br>";
            
            // date() : UNIX 타임 스탬프를 날짜로 구하기
            $time2 = time() + (60 * 60 * 24 * 7);   // 60초 * 60분 * 24시간 * 7일 = 1주일
            
            $toDay = date('Y년 m월 d일', $now); // 현재 날짜
            $nextWeek = date('Y년 m월 d일', $time2);
            
            print $toDay."<br>";
            print $nextWeek."<br><br>";
            
            /*
             * [날짜 형식 기호]
             * Y (네자리 연도 표시), y (뒤의 두 자리 연도 표시)
             * M (영문 약자로 표시), m (두자리 숫자로 월 표시)
             * D (영문 요일), d (두자리 숫자로 일 표시)
             * H (24 시간 표시), h (12 시간 표시)
             * I (썸머타임 기간이 적용되었는지 알려주는 기호,
             *      적용시 1, 미적용시 0)
             * i (분을 2자리 숫자로 표시)
             * s (초를 2자리 숫자로 표시)
             */
            
            // 날짜의 유효성 검사
            // checkdate(월, 일, 연도) : 해당 날짜가 유효하지 않으면 FALSE값을 리턴한다.
            if (!checkdate(8, 32, 2016))
                print "날짜를 다시 확인해주세요.";
        ?>
        
        <p><a href="../index.php">뒤로</a></p>
    </body>
</html>
