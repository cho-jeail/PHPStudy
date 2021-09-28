<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>파일 업로드 결과</title>
    </head>
    <body>
        <?php
//            $_FILES['upload']['name'] : 전송된 파일의 이름
//            $_FILES['upload']['type'] : 파일의 MIME 형식
//            $_FILES['upload']['size'] : 파일의 크기(byte)
//            $_FILES['upload']['tmp_name'] : 서버에 저장된 임시 파일명
//            $_FILES['upload']['error'] : 오류코드
            $fileDir = "D:\stdPHP\htdocs\uploadFile\\";
            $filePath = $fileDir.$_FILES['upload']['name'];   // 경로 + 파일명
            // move_uploaded_file(임시파일명, 이동할 곳의 폴더명) : 파일을 이동시키는 함수
            if (move_uploaded_file($_FILES['upload']['tmp_name'], $filePath)) {
                $imgDir = "../uploadfile/";   // 웹서버의 설정 값 DocumentRoot를 기준으로해서 할당한다.
                $imgPath = $imgDir.$_FILES['upload']['name'];
                /*
                 * getimagesize('이미지_파일명') 함수는 지정된 이미지 파일의 크기를 확인해서
                 * 파일 타입과 이미지의 크기에 대한 정보를 출력해준다. 배열 형태로 출력을 한다.
                 * [0] : width 값
                 * [1] : height 값
                 * [2] : Image Type 을 정수값으로 반환.
                 *      1 : gif, 2 : jpg, 3 : swf, 4 : psd, 5 : bmp
                 * [3] :width, height 값을 모두 표시
                 *      ex) width="300" height="200" 
                 */
                $size = getimagesize($filePath);
//                print '<img src="'.$imgPath.'" '.$size[3].'><br>';
//                print $_POST['comment'].'<br><br>';
        ?>
        <img src="<?=$imgPath?>" <?="$size[3]"?>><br>
        <?=$_POST['comment']?><br><br>
        <?php      
            }
            else {
                echo '파일 업로드 실패!!<br>';
            }
        ?>
        <a href="../html/fileUploadTest.html">뒤로가기</a>
    </body>
</html>
