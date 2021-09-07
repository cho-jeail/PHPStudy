<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>문자열 함수</title>
    </head>
    <body>
        <?php
            // 문자열 길이 및 잘라내기
            // 한글은 3byte, 영어 및 특수문자는 1byte
            echo strlen("안녕하세요!!!");
            print "<br>";
            echo strlen("Hello PHP!!!");
            print "<br>";
            
            $string = "Good Mornig!";
            $result = substr($string, 3, 5);    
            // substr(문자열 변수, 시작 위치, 문자열의 길이);
            
            print $result."<br>";
            
            $str = "Good Night";
            $find = "Night";
            $replace = "Day";
            
            // str_replace(찾는 문자, 교체 문자, 문자열);
            $result = str_replace($find, $replace, $str);
            print $result."<br>";
            
            // trim(문자열) : 문자열 내부의 빈 칸 제거
            $string = "     asd     ";
            $string = trim($string);
            print $string."<br>";
            
            $string = "Hello World";
            $result = strpos($string, "World");
            
            if ($result == false)
                print "찾고자 하는 문자열을 찾지 못했습니다.";
            else
                print $result."<br><br>";
        ?>
        
        <?php
            /*
             * HTML 표시함수
             * htmlspecialchars(문자열, 옵션);
             * 
             * 옵션 종류
             * 1. ENT_COMPAT : 기본 옵션 (" 만 HTML 특구문자로 변환하겠다.)
             * 2. END_QUOTES : '," 모두 HTML 특수문자로 변환
             * 3. ENT_NOQUOTES : 아무것도 HTML 특수문자로 변환하지 않는다.
             * 
             * HTML 태그를 표현하는 특수문자
             * & : &amp;
             * " : &quot;
             * ' : &#39;
             * < : &lt;
             * > : &gt;
             */
        
            print  "<a href='#'>링크</a>";
            print "<h1>안녕하세요</h1><br>";
            print "&lt;h1&gt;안녕하세요&lt;/h1&gt;";
            print "<br>";
            $htmlString = "<a href='#'>링크</a>";
            print htmlspecialchars($htmlString, ENT_NOQUOTES)."<br>";
            
            // strip_tags(문자열) : 문자열 내에 html태그를 지워서 표시하는 함수이다.
            $result = strip_tags($htmlString);
            print $result."<br>";
            
            $string2 = "안녕하세요!
                반갑습니다!
                안녕히가세요!"; // 줄바꿈 [Ctrl] + [Enter]
            print $string2."<br>";
            print nl2br($string2)."<br><br>";
            
            // 지정된 문자로 배열 구분하기
            $arr1 = array("사과", "오렌지", "바나나", "딸기");
            $result = implode("/", $arr1);
            print $result."<br>";
            
            // 배열구조로 출력해주는 print_r
            $arr2 = explode('/', $result);
//            print $arr2;  // 그냥 출력시 에러 발생
            print_r($arr2);
            print "<br>";
            
            /*
             * addslashes() : 매개변수로 넘겨준 문자열 안에 single quote(') 혹은
             *          double quote("), 백슬래쉬(\), NULL 바이트가 포함되어 있다면
             *          해당 문자 앞에 역슬래시(\)를 추가해 주는 함수다.
             * DB 입력 시 에러 발생하므로 필수적으로 해줘야한다.
             */
            $string = '"오렌지", "사과", "포도"';
            print $string."<br>";
            print addslashes($string);
        ?>
        <p><a href="index.php">뒤로</a></p>
    </body>
</html>
