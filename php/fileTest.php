<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>파일 읽기, 쓰기 등 함수</title>
    </head>
    <body>
        <?php
            // file_get_contents("파일명 또는 URL") : 해당 파일을 읽어온 다음
            // 파일의 내용을 문자열로 리턴하는 함수
            // file_put_contents("파일명", $변수) : 파일명에 입력할 데이터($변수)를 넣는다.
            // is_readable(파일명) : 파일이름으로 지정한 파일이나 디렉토리가 읽기 가능한 상태인지 확인하는 함수, true / false로 반환
        
            $fname = "text.txt";    // 경로는 현재 파일과 같은 위치인 것으로 판단.
            print $fname."<br>";
            
            if(is_readable("../".$fname)) {
                $contents = file_get_contents("../".$fname);
                print $contents."<br>";
            }
            else {
                print $fname."이라는 파일이 없습니다.";
            }
            
            $inputData = "입력 데이터 테스트입니다.";
            if(is_readable("../".$fname)) {
                file_put_contents("../".$fname, $inputData);  // 데이터 추가가 아닌 덮어씌우기이다.
                print $fname."에 데이터를 입력하였습니다.<br>";
            }
            
            // 파일 삭제하기
            // unlink("파일명") : 해당 파일을 삭제했을때 true 값을 반환한다.
            // is_file("파일명") : 파일이름으로 지정한 이름이 파일인지 아닌지 확인하는 함수. true / false 반환
            // copy("대상 파일명", "복사된 파일의 이름") : 파일을 복사하는 함수.
            $fname = "text2.txt";
            if(is_file("../".$fname) && unlink("../".$fname))
                print $fname."이 삭제 완료 되었습니다.<br>";
            else
                print $fname."는 삭제할 수 없습니다.<br>";
            
            // 파일 복사하기
            if(is_file("../text.txt") && copy("../text.txt", "../".$fname))
                print "text.txt를 $fname"."라는 이름으로 복사 되었습니다.<br>";
            else
                print "복사할 수 없습니다.<br>";
        ?>
        <p><a href="../index.php">뒤로</a></p>
    </body>
</html>
