<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>클래스 상수와 스코프 해결 연산자</title>
    </head>
    <body>
        <?php
            class mainClass {
                const constant = '상수값';
                
                static function show() {    // static을 붙여주지 않으면 에러발생
                    echo self::constant."<br>";
                }
            }
            
            // 외부 출력 시
            echo mainClass::constant."<br>";
            // 스코프 해결 연산자(::)
            // 더블콜론은 static이나 contant와 클래스의 재정의된 프로퍼티나 메서드에
            // 접근할 수 있도록 해준다.
            
            $className = 'mainClass';
            echo $className::constant."<br>";
            
            mainClass::show();
            
            $class = new mainClass();
            $class->show();
            
            echo $class::constant;
            
            class subClass extends mainClass {
                public static $staticString = "static var";
                
                public static function doubleColon() {
                    echo parent::constant."<br>";
                    echo self::$staticString;
                }
            }
            
            echo subClass::doubleColon();
        ?>
        <hr>
        <?php
            // 클래스 상수와 스코프 예제
            class testMainClass {
                public static $staticVar = "test";
                public function returnValue() {
                    return self::$staticVar;
                }
            }
            
            class testSubClass extends testMainClass {
                public static function returnValueSub() {
                    // static을 붙여주지 않으면 에러발생
                    return parent::$staticVar;
                }
            }
            
            $obj = new testMainClass();
            
            echo $obj->returnValue()."<br>";
            echo testMainClass::$staticVar."<br>";
            echo testSubClass::$staticVar."<br>";
            echo testSubClass::returnValueSub()."<br>";
        ?>
        <a href="../index.php">뒤로가기</a>
    </body>
</html>
