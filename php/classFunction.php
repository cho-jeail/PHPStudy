<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>가변 인가 함수</title>
    </head>
    <body>
        <?php
            // func_get_args() : 함수의 인자 목록을 배열로 반환하는 함수
            // func_num_args() : 함수의 인자 개수를 리턴하는 함수
            // method_exists() : 클래스 안에 메서드가 있으면 True 그렇지 않으면 False값
            // call_user_func_array() : 함수를 호출하는데 배열로 인자값을 설정하여 호출하는 함수
            
            // func_num_args(), func_get_args()
            function test() {
                $numArg = func_num_args();
                echo "함수의 인자 개수 : $numArg <br>";
                if($numArg >= 2) {
                    print "두번째 인자는 : ".func_get_arg(1)."<br>";
                }
                
                $argList = func_get_args();
                for($i = 0; $i < $numArg; $i++) {
                    print "함수의 ".($i + 1)."번째 인수 : $argList[$i] <br>";
                }
            }
            test(1, 2, 3);
            
            // method_excists()
            class testClass {
                function action() {
                    
                }
            }
            $a = new testClass();
            $check = method_exists($a, 'action');
            echo "check : $check <br>";
            
            // call_user_func_array()
            function test2($a, $b) {
                print __FUNCTION__."의 인자 값 : $a / $b <br>";
            }
            call_user_func_array("test2", array('둘리', '또치'));
            
            class testClass2 {
                function testFunc($p1, $p2) {
                print __METHOD__."의 인자 값 : $p1 / $p2 <br>";
                }
            }
            $obj1 = new testClass2();
            call_user_func_array(array($obj1, 'testFunc'), array("딸기", "사과"));
        ?>
        <?php
            class Main {
                function __construct() {
                    $argList = func_get_args();
                    $numArgs = func_num_args();
                    if(method_exists($this, $fName = '__construct'.$numArgs)) {
                        call_user_func_array(array($this, $fName), $argList);
                    }
                }
                function __construct1($p1) {
                    print "인자가 1개인 생성자 호출 : $p1 <br>".PHP_EOL;
                    // PHP_EOL
                    // <br>태그와 다르게 내장 상수 \n과 같다고 보면 된다.
                }
                function __construct2($p1, $p2) {
                    print "인자가 2개인 생성자 호출 : $p1 / $p2 <br>".PHP_EOL;
                }
            }
            
            $obj1 = new Main('test1');
            $obj2 = new Main('player1', 'player2');
        ?>
        <a href="../index.php">목록으로</a>
    </body>
</html>
