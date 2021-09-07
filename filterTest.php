<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Filters 사용</title>
    </head>
    <body>
        <h2>PHP에서의 Filter</h2>
        <?php
            // 정수 타입 및 유효 범위 파악 (FILTER_VALIDATE_INT)
            $int = 350;
            $range1 = 100;
            $range2 = 500;
            
            if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $range1, "max_range" => $range2)))) {
                echo '해당 변수는 정수타입이며, 해당 범위 안에 있는 수 입니다.<br>';
            }
            else {
                echo '정수 타입이 아닙니거나 범위안의 수가 아닙니다.<br>';
            }
            
            // URL 유효성 파악
            $url = "http://www.test.com/";
            // FILTER_FLAG_PATH_REQUIRED : 경로에 PATH가 포함되었는가를 확인.
            // 예) http://www.test.com/path
            // FILTER_FLAG_QUERY_REQUIRED : 경로에 쿼리가 있는지 확인.
            // 예) http://www.test.com/?param1=value1&param2=value2
            
            if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)) {
                echo 'URL 형식이 맞습니다.<br>';
            }
            else {
                echo 'URL 형식이 아닙니다.<br>';
            }
            
            // IP 유효성 파악
            $ip = "192.168.0.1";
            // FILTER_FLAG_IPV4 : ipv4 방식인지 확인.
            // FILTER_FLAG_IPV6 : ipv6 방식인지 확인.
            
            if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
                echo 'ip 형식이며, ipv4 형식입니다.<br>';
            }
            else {
                echo 'ip 형식이 아니거나, ipv4형식이 아닙니다.<br>';
            }
            // 사용 예
            $ip2 = $_SERVER['REMOTE_ADDR'];
            // httpd.conf에 Listen 설정에 따라 IPv4나 IPv6가 나올수 있음을 확인했다.
            print $ip2."<br>";
            if (filter_var($ip2, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
                echo 'ip 형식이며, ipv4 형식입니다.<br>';
            }
            else {
                echo 'ip 형식이 아닙니거나 ipv4 형식이 아닙니다.<br>';
            }
        ?>
        
        <p><a href="index.php">뒤로</a></p>
    </body>
</html>
