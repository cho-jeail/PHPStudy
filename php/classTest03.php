<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>생성자와 소멸자</title>
    </head>
    <body>
        <?php
            // 생성자
            class mainClass {
                function __construct() {
                    print 'mainClass의 생성자입니다.<br><br>';
                }
                
                function outPut() {
                    print 'hello!<br><br>';
                }
            }
            
            // 부모의 생성자는 자식 클래스가 생성자를 가지고 있을 경우 내부적으로 호출되지 않는다.
            // 따라서 부모 생성자를 호출하기 위해서는 자식 생성자 내에서 parent::__construct()를
            // 호출해준다.
            class subClass extends mainClass {
                function __construct() {
                    parent::__construct();
                    print "subClass의 생성자!<br><br>";
                }
            }
            
            class testClass extends mainClass {
                
            }
            
            $a = new mainClass();
            $a->outPut();
            
            $b = new subClass();
            
            $c = new testClass();
        ?>
        <?php
            // 생성자에 매개변수 사용하기
            class helloClass {
                function __construct($name) {
                    print $name."님 안녕하세요!<br>";
                }
            }
            $a = new helloClass('이지은');
            $b = new helloClass('홍진호');
            $c = new helloClass('임요한');
        ?>
        <hr>
        <?php
            // 소멸자
            class desClass {
                function __construct() {
                    print '생성자!<br><br>';
                }
                function __destruct() {
                    print '소멸자!!!!<br><br>';
                }
            }
            
            $d = new desClass();
            // 페이지 생성이 다 끝나고나면 소멸자가 실행된다.
        ?>
        <a href="../index.php">뒤로가기</a>
    </body>
</html>
