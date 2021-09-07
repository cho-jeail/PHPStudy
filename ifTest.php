<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>if문과 다중if문</title>
    </head>
    <body>
        <?php
            // 단일 if문
            $user1 = "홍길동";
            $pw = "1q2w3e4r";
            
            $member_name = "홍길동";
            $member_pw = "1q2w3e4r";
            
            if ($user1 == $member_name && $pw == $member_pw) {
                print $user1."님은 회원이 맞습니다.";
            }
            else {
                print "회원 정보와 다릅니다.";
            }
            print "<br>";
            
            // 3항 연산자
            $checkMember = ($user1 == $member_name && $pw == $member_pw) ? "회원이 맞습니다." : "회원이 아닙니다.";
            print $checkMember."<br>";
            
            // 다중 if문
            $score = 75;
            
            if ($score >= 90) {
                print "A학점";
            }
            else if ($score >= 80) {
                print "B학점";
            }
            else if ($score >= 70) {
                print "C학점";
            }
            else if ($score >= 60) {
                print "D학점";
            }
            else {
                print "불합격입니다.";
            }
            print "<br>";
            
            print "<p><a href='index.php'>뒤로</a></p>";
        ?>
    </body>
</html>
