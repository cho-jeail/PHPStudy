<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>디렉토리 관리 함수</title>
    </head>
    <body>
        <?php
            // mkdir("경로명", 모드) : 성공 시 true, 실패 시 : false;
            // 권한
            // 0777 : 모든 권한을 가질 수 있다.
            $dname = "sample";
            
            if(!is_dir($dname) && mkdir($dname))
                print "$dname 디렉토리를 만들었습니다.<br>";
            else
                print "$dname 디렉토리를 만들수 없습니다.<br>";
            
            // directory 삭제하기
            // rmdir(디렉토리명);
            // is_dir(디렉토리명) : 해당 디렉토리의 유무를 확인하는 함수. true / false 반환
            if(is_dir($dname)) {
                rmdir($dname);
                print "삭제되었습니다.<br>";
            }
            else
                print "삭제할 디렉토리가 존재하지 않습니다.<br>";
            
            // 파일의 경로
            $filePath = pathinfo(__FILE__);
            
            print $filePath['dirname']."<br>";      // 현재 파일이 위치한 경로
            print $filePath['basename']."<br>";     // 해당 파일 이름
            print $filePath['extension']."<br>";    // 파일 확장명
            print $filePath['filename']."<br>";     // 순수 파일명
        ?>
        <p><a href="../index.php">뒤로</a></p>
    </body>
</html>
