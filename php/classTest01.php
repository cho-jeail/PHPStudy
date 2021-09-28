<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>객체와 클래스 개념</title>
    </head>
    <body>
        <?php
            class person {
                var $name = "홍길동";
                var $age = 20;
                
                function hello() {
                    print "안녕하세요! 저는 ";
                    echo $this->name;
                    print "이고 나이는 ";
                    echo $this->age;
                    print "살 입니다.";
                }
            }
            
            $person1 = new person();
            $person1->hello();
        ?>
        <br><br>
        <a href="../index.php">목록으로</a>
    </body>
</html>
