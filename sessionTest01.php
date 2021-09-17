<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Session 사용법</title>
    </head>
    <body>
        <?php
            // session_start() : 세션의 시작
            // 사용자의 시스템에 이전에 발급된 유효한 세션이 있는지 확인하고, 
            // 검사결과 이전 값이 없다면 새로운 SID를 생성하고, 이전에 발급한 
            // SID가 있고 유효하다면 서버에 저장한 데이터를 그대로 사용한다.
            // 세션 아이디는 기본적으로 PHPSESSID라는 이름을 갖는 변수에 저장된다.
        
            // 세션 등록
            // session_start(); 세션을 사용하겠다는 의미
            // 스크립트 최상단에 호출 해주어야한다.
            // $_SESSION['변수이름'] = "세션값"; 
            // ex) $_SESSION['sessionTest'] = 'TEST';
            
            // 세션 삭제
            // session_start();
            // $veriableName = "sessionTest";
            //
            // 해당 네임의 세션변수를 삭제하는 함수
            // session_unregister($veriableName);
            //
            // 현재 등록된 모든 세션 변수를 삭제하는 함수
            // session_unset();
            
            // 세션의 유효기간을 설정하는 함수. 변수는 분이들어간다.
            // 주의할 점으로 session_start(); 호출전에 호출해줘야한다.
            // session_cache_expire($minute);
            // ex) session_cache_expire(30); 유효시간을 30분으로 설정
        
            // 세션 종료
            // session_destroy();
            
            session_start();
            
            $count = 1;
            if(isset($_SESSION['count'])) {
                $count = $_SESSION['count'];
                $count++;
            }
            $_SESSION['count'] = $count;
           
        ?>
        <h2>Session 테스트 하기</h2>
        <?php
            if($count == 1) {
                ?>
                첫번째 방문입니다.<br><br>
                세션 정보가 없습니다.<br>
                새로고침을 해주세요.<br>
                <?php
            }
            else {
                ?>
                <?=$count?>번째 방문입니다.<br>
                <?php
            }
        ?>
        <a href="index.php">목록으로</a>
    </body>
</html>
