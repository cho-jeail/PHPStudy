<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>정규표현식</title>
    </head>
    <body>
        <?php
            // preg_match(정규표현식, 대상문자열) : 대상 문자열에서 정규표현식 일치. true / false 반환
            if(preg_match("/php/i", "PHP is Personal Home Page."))
                print "일치하는 문자열이 있습니다.<br>";
            else
                print "일치하는 문자열이 없습니다.<br>";
            
            // \b는 단어의 경계, \b로 감싸진 경우 독립된 단어를 찾는 것이다.
            if(preg_match("/\bsnow\b/i", "snowWhite"))  // 이와 같이 snow가 있어도 연결되어 있으면 찾을수가 없다.
                print "일치하는 단어를 찾았습니다.<br>";
            else
                print "일치하는 단어가 없습니다.<br>";
            
            // preg_match("정규표현식", "문자열", 배열변수);
            // preg_match 함수는 매칭되는 값을 찾게 되면 그 시점에서 검색이 종료된다.
            $string = "website http://www.naver.com websiteTest@naver.com";
            preg_match("/website/", $string, $arr);
            print_r($arr);
            print "<br>";
            
            preg_match("!http://!", $string, $arr);
            print_r($arr);
            print "<br>";
            var_dump($arr);
            print "<br>";
            
            // preg_match_all("정규표현식", "문자열", 배열변수);
            // 매칭되는 모든 값을 가져올때 사용 됨.
            $string2 = "My name is Tom. I heard You are also tom, right? No, I am Tommy.";
            preg_match_all("/\btom\b/i", $string2, $arr);
            print_r($arr);
            print "<br>";
            var_dump($arr);
            print "<br>";
            // tom과 Tom을 찾아냄. 대소문자 구분 필요없는 것으로 판단.
            
            // preg_replace("정규표현식", 치환 후 문자, 치환 대상 문자열);
            // 성공 시 바뀐 값을 반환하며, 실패하면 본래의 값을 유지한다.
            // 그리고 오류 발생 시 null값을 반환한다.
            $string = "April 15, 2003";
            $pattern = '/(\w+) (\d+), (\d+)/';
            $replacement = '${1}1.$3';
            print preg_replace($pattern, $replacement, $string)."<br>";
            
            // preg_replace()와 인덱스 배열을 이용한 치환.
            $string = "The quick brown fox jumped over the lazy dog";
            
            $patterns[0] = '/quick/';
            $patterns[1] = '/brown/';
            $patterns[2] = '/fox/';
            
            $replacements[2] = 'bear';
            $replacements[1] = 'black';
            $replacements[0] = 'slow';
            
            print_r($replacements);
            print "<br>";
            // 인덱스를 지정해서 입력한다고 해서 인덱스 기준으로 정렬이 되는게 아니였다.
            ksort($replacements);   // key 값 정렬을 하지않으면 제대로 치환되지 않는다.
            print preg_replace($patterns, $replacements, $string);
        ?>
        <p><a href="index.php">뒤로</a></p>
    </body>
</html>
