<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>GD 라이브러리 활용 1 확인</title>
    </head>
    <body>
        <?php
            // GD 라이브러리(GD Graphics Library) : GIF 이미지를 다루기 위한 라이브러리 및 도구
            $resizeW = 160;
            $thumnailName = "MyPhoto.jpg";
            $fileDir = "D:\stdPHP\htdocs\uploadFile\\";
            
            $filePath = $fileDir.$_FILES['upload']['name'];
            $thumnailName_fp = $fileDir.$thumnailName;
            
            if(move_uploaded_file($_FILES['upload']['tmp_name'], $filePath)) {
                $imgDir = "../uploadFile/";
                $imgPath = $imgDir.$_FILES['upload']['name'];
                $thumnailName_img_path = $imgDir.$thumnailName;
                
                // mb_strpos($haystack, $needle)
                // -> $haystack에 $needle이라는 형식인지 또는 gif 형식인지를 체크하는 함수
                if(mb_strpos($_FILES['upload']['type'], 'jpeg')) {
                    $gd_img = imagecreatefromjpeg($filePath);   // jpeg 이미지 파일로 읽어들인다.
                    // ID 값을 $gd_img에 할당
                    $imgWidth = imagesx($gd_img);   // 해당 이미지의 가로폭을 얻어오는 함수.
                    $imgHeight = imagesy($gd_img);  // 해당 이미지의 세로폭을 얻어오는 함수.
                    
                    $resizeWidth = $resizeW;
                    $resizeHeight = ($imgHeight * $resizeWidth) / $imgWidth;
                    // 비율로 계산하는 공식 정리는 노션에서 하겠음.
                    
                    $output_img = imagecreatetruecolor($resizeWidth, $resizeHeight);
                    
                    // 새롭게 만들 이미지의 크기를 변경하여 복사
                    imagecopyresized($output_img, $gd_img, 0, 0, 0, 0, $resizeWidth, $resizeHeight, $imgWidth, $imgHeight);
                    imagejpeg($output_img, $thumnailName_img_path); // 이미지를 jpeg로 저장
                    
                    imagedestroy($gd_img);      // 메모리 해제
                    imagedestroy($output_img);  // 메모리 해제
                    
                    $originSize = getimagesize($filePath);
                    $dstSize = getimagesize($thumnailName_fp);
                    ?>
                    <h3>파일 업로드가 완료되었습니다.</h3>
                    <h4>원본</h4>
                    <img src="<?=$imgPath?>" <?=$originSize[3]?>/><br>
                    <h4>크기 수정본</h4>
                    <img src="<?=$thumnailName_img_path?>" <?=$dstSize[3]?>/><br>
                    <h4>코멘트</h4>
                    <?=$_POST['comment']?><br>
                    <a href="../html/GD1.html">뒤로가기</a>
                    <?php
                }
                else {
                    print '<script type="text/javascript">
                            alert("jpeg 형식이 아닙니다. 다시 확인해주세요.");
                            document.location.href = "../html/GD1.html";
                        </script>';
                }
            }
            else {
                print '<script type="text/javascript">
                        alert("이미지 업로드가 실패했습니다.");
                        document.location.href = "../html/GD1.html";
                    </script>';
            }
        ?>
        
    </body>
</html>
