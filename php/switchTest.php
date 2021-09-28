<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>switch문과 형변환</title>
    </head>
    <body>
        <?php
            $score = 78;
            $result = (int)($score/10);
            
            switch ($result) {
                case 9:
                    print "A학점";
                    break;
                case 8:
                    print "B학점";
                    break;
                case 7:
                    print "C학점";
                    break;
                case 6:
                    print "D학점";
                    break;
                default :
                    "불합격";
            }
            print "<br><br>";
            
            $arr = array("가", 1);
            print $arr[0]."<br><br>";
            
            $f = 7.8;
            $i = (int)$f;
            print "f는 ".$f."이고, i는 ".$i."이다.<br><br>";
            // 형변환 결과가 7이 나오는걸 볼수 있다.반올림이나 올림이 아닌 버림이다.
            
            $d = (double)$i;
            print $d."<br><br>";
            
            if ($i === $d) {
                print "변수형과 값이 일치한다.";
            }
            else {
                print "변수형 또는 값이 일치하지 않는다.";
            }
            print "<br><br>";
            
            print "<p><a href='../index.php'>뒤로</a></p>";
        ?>
    </body>
</html>
