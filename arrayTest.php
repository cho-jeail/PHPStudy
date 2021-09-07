<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>배열 사용 방법</title>
    </head>
    <body>
        <?php
            $arr[] = "사과";
            $arr[] = "오렌지";
            $arr[] = "바나나";
            $arr[] = "배";
            
            print $arr[0];
            print "<br>";
            print $arr[2];
            print "<br>";
            print $arr[1];
            print "<br><br>";
            
            $a = array(10, 20, 33, 12, 34, 22);
            $b = array("사과", "오렌지", "바나나", "배", "포도");
            $c = array();
            $d = [1, 2, 3, 4, 5];
            
            print $a[4];
            print "<br>";
            print $b[2];
            print "<br>";
            print $d[3];
            print "<br><br>";
            
            $data = explode("/", "서울/부산/대구/광주");
            
            print $data[0];
            print "<br>";
            print $data[1];
            print "<br>";
            print $data[2];
            print "<br><br>";
            
            print"<p><a href='index.php'>뒤로</a></p>";
        ?>
    </body>
</html>
