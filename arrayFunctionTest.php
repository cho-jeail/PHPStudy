<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>배열 응용 함수</title>
    </head>
    <body>
        <?php
            $array = ["자동차", "기차", "택시", "버스"];
            
            array_push($array, "택시"); // 맨 뒤에 추가되며, 중복을 허용한다.
            print "<pre>";
            print_r($array);
            print "</pre>";
            
            $popdata = array_pop($array);   // 마지막 값을 빼오는 함수
            print "<pre>";
            print_r($array);
            print "</pre>";
            print "pop 된 데이터 : $popdata";
            
            array_unshift($array, "비행기");    // 맨 앞에 추가시켜주는 함수
            print "<pre>";
            print_r($array);
            print "</pre>";
            
            $data = array_shift($array);    // 맨 앞에서 값을 빼오는 함수
            print "<pre>";
            print_r($array);
            print "</pre>";
            print "shift 된 데이터 : $data";
        ?>
        <?php
            // 배열의 병합
            $array1 = ["menu1" => "짜장면", "menu2" => "짬뽕", "menu3" => "볶음밥"];
            $array2 = ["menu1" => "잡채밥", "menu2" => "짬뽕밥", "menu4" => "탕수육", "option1" => "쟁반짜장"];
            
            $result = array_merge($array1, $array2);    // key 값을 기준으로 같은 값은 덮어씌워버린다.
            
            print "<pre>";
            print_r($result);
            print "</pre>";
            
            // 배열 자르기
            $data = ["a", "b", "c", "d", "e", "f"];
            print implode(",", $data)."<br>";  // 원본 한번 출력하여 확인해주기
            
            $result = array_slice($data, 2, 3); // array_slice(대상 배열, 시작위치, 길이)
            print implode(",", $result)."<br>";
            
            $result = array_slice($data, -2, 1);    // 시작 위치가 음수이면 뒤에서부터 계산 (파이썬이랑 비슷)
            print implode(",", $result)."<br>";
            
            $result = array_slice($data, 3);
            print implode(",", $result)."<br>"; // 길이가 주어지지 않았다면, 시작위치에서 끝까지 자른다.
            
            $data = [0, 1, 2, 3, 4, 5, 6];
            $result = array_reverse($data); // 역순 정렬
            print_r($result);
        ?>
        <p><a href="index.php">뒤로</a></p>
    </body>
</html>
