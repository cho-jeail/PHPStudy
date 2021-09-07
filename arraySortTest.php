<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>배열 정렬 함수</title>
    </head>
    <body>
        <?php
            $arr1 = [10, 5, 20, 13];
            sort($arr1);    // 기본이 오름차순
            print $arr1[0];
            print "<pre>";
            print_r($arr1);
            print "</pre>";
            
            rsort($arr1);   // 역순 정렬
            print "<pre>";
            print_r($arr1);
            print "</pre>";
            
            // sort(배열, flag);
            /*
             * [flag 종류]
             * SORT_REGULAR : 데이터의 타입을 변환하지 않고 있는 그대로 비교해서 정렬하는 방법
             * SORT_NUMERIC : 데이터를 숫자로 취급해서 정렬하는 방법.
             * SORT_STRING : 데이터를 문자열로 취급해서 정렬하는 방법.
             * SORT_LOCALE_STRING : 데이터를 현재 로케일을 기반으로 정렬하는 방법.
             * SORT_FLAG_CASE : 데이터의 대소문자를 구별하지 않고 정렬하는 방법.
             */
            
            sort($arr1, SORT_STRING);
            print "<pre>";
            print_r($arr1);
            print "</pre>";
        ?>
        <?php
            $arr2 = ["product" => "1000", "product2" => "500", "product3" => "3000"];
            
            asort($arr2);   // value 값 기준 정렬
            print "<pre>";
            print_r($arr2);
            print "</pre>";
            
            arsort($arr2);  // value 값 기준 역 정렬
            print "<pre>";
            print_r($arr2);
            print "</pre>";
            
            ksort($arr2);   // key 값 기준 정렬
            print "<pre>";
            print_r($arr2);
            print "</pre>";
            
            krsort($arr2);  // key 값 기준 역 정렬
            print "<pre>";
            print_r($arr2);
            print "</pre>";
        ?>
        <p><a href="index.php">뒤로</a></p>
    </body>
</html>
