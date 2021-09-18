<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>접근제한자 상속 개념</title>
    </head>
    <body>
        <?php
            class modifier {
                public $name = "김춘배";
                
                public function profile() {
                    echo 'name : '.$this->name;
                }
            }
            
            $a = new modifier();
            $a->profile();
            print '<br>';
            print "public name : ".$a->name;
            print '<br><br>';
            
            class modifier2 {
                private $name = "마춘식";
                public function output() {
                    echo "name : ".$this->name;
                }
            }
            
            $a2 = new modifier2();
            $a2->output();
//            print "<br>";
//            $a2->name;    // private 으로 인해 외부에서 호출할 수 없다.
            print "<br><br>";
        ?>
        
        <?php
            // 상속 ex1)
            class superClass {
                var $name = "홍길동";
            }
            
            class subClass extends superClass {
                function info() {
                    echo 'name : '.$this->name;
                }
            }
            
            $childClass = new subClass();
            $childClass->info();
        ?>
        <br><br>
        <?php
            // 상속 ex2)
            class superClass2 {
                var $name = "고길동";
                
                function showInfo() {
                    echo 'name : '.$this->name;
                }
            }
            
            class subClass2 extends superClass2 {
                function output() {
                    $this->showInfo();
                }
            }
            
            $childClass = new subClass2();
            $childClass->output();
        ?>
        <br><br>
        <?php
            // 상속 protected
            class superClass3 {
                public $name = "둘리";
                
                protected function showInfo() {
                    echo 'name : '.$this->name;
                }
            }
            
            class subClass3 extends superClass3 {
                function output() {
                    $this->showInfo();
                }
            }
            
//            $super = new superClass3();
//            $super->showInfo();   // 작동하지 않는다.
            
            $sub = new subClass3();
            $sub->output();
        ?>
        <br><br>
        <a href="index.php">목록으로</a>
    </body>
</html>
