<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>제주한라병원 코로나19 사전 설문</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="bootstrap4/dist/css/bootstrap.min.css">

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
     <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    
    /* 사이드바 */
    .bg-halla {
      background-color: #1860ac;
    }

    .font-nav-white{
        font: #FFFFFF;
    }
    /* 본문 */
    .page {
     margin-top:50px;
    }

    .aligncenter {
     text-align: center;
    }

    /* footer */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

  </style>

  <!-- Donwload Button -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.btn-download {
  background-color: #1860ac;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn-download:hover {
  background-color: RoyalBlue;
}
</style>
<!-- /Download button -->

</head>
<body>

<nav class="navbar navbar-expand-sm bg-halla fixed-top"> 
  <a class="navbar-brand"  href="#"><p style="color:white">제주한라병원 코로나19 사전 설문</p></a>
<!-- Links --> 
<!-- <ul class="navbar-nav"> 
  <li class="nav-item"> 
    <a class="nav-link "><p style="color:white">제주한라병원 코로나19 사전 설문</p></a> 
  </li> 
</ul>  -->
</nav>

<!-- <script src="/js/dist/jquery.validate.min.js"></script> -->
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script> 
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> -->



<div id="container">
    <div class="page-wrapper bg-gra-02 p-t-130 font-poppins page">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <!-- <center>
                    <h2 class="title">아래 QR코드를 스마트폰에 저장해주세요</h2>
                    </center> -->
                    <!-- <form method="POST" action="create_qrcode.php"> -->
                
                        <?php

                        error_reporting( E_ALL );
                        ini_set( "display_errors", 1 );

                        // 비정상적 접근 처리                                                
                        // if(empty($_POST['name']) or empty($_POST['phone'])){
                        //     echo "<script>alert('잘못된 접근입니다. 사전 문진 페이지로 이동합니다.');</script>";
                        //     echo "<script>location.href='./survey_form.php'</script>";
                        // }
                       
                        // $output =  json_encode($member, JSON_UNESCAPED_UNICODE);
                        $output = '{"name":"홍길동","personalId":"123123123123","birthday":"123123123","mobile":"123123123123","occpDtlInfo":"무직","diseaseId_name":"코로나19","feverYn":"on","feverTemperature":"46","otherSymptoms":"멀쩡함","suspiciousContactYn":"U","outbreakAreaVisitYn":"N","outbreakArea":"서울","travelYn":"N","chk_agree":"Y","next":"Next"}';
                        echo $output;
                        

                        // 압축을 해제한 phpqrcode 폴더의 qrlib.php 파일을 include한다.
                        include_once "./phpqrcode/qrlib.php";
                        $filePath = sha1($qrContents).".png";

                        if(!file_exists($filePath)) {
                            $ecc = 'H'; // L, M, Q, H, This parameter specifies the error correction capability of QR.
                            $pixel_Size = 10; // This specifies the pixel size of QR.
                            $frame_Size = 10; // level 1-10
                            QRcode::png($output, $filePath, $ecc, $pixel_Size, $frame_Size);
                            echo "파일이 정상적으로 생성되었습니다.";
                            echo "<hr/>";
                        } else {
                            echo "파일이 이미 생성되어 있습니다.\n파일을 지우고 다시 실행해 보세요.";
                            echo "<hr/>";
                        }

                        echo "저장된 파일명 : ".$filePath;
                        echo "<hr/>";
                        echo "<center><img src='".$filePath."'style='width:50%;'/></center>";


                        $included_files = get_included_files();
                        echo "현재페이지 인클루드된 파일리스트:";    
                        foreach ($included_files as $filename) :         
                            echo $filename;    
                        endforeach;


                        if(!@include("./phpqrcode/qrlib.php")) throw new Exception("./phpqrcode/qrlib.php");


                        include_once "./phpqrcode/qrlib.php";
                        $filePath = "./qrcodeimg/".sha1($output).".png";   



                                                
                        if(!file_exists($filePath)) {
                            $ecc = 'H'; // L, M, Q, H, This parameter specifies the error correction capability of QR.
                            $pixel_Size = 10; // This specifies the pixel size of QR.
                            $frame_Size = 10; // level 1-10
                            QRcode::png($output, $filePath, $ecc, $pixel_Size, $frame_Size, $back_color = 0xFF0000, $fore_color = 0xFF0000);  
                            echo "<div class='p-t-10 p-b-10'>";
                            echo "<label class='label'>";
                            echo "<center>QR코드를 스마트폰에 저장해주세요.</center>";
                            echo "</label>";
                            echo "<hr/>";
                        } else {
                            
                            echo "<div class='p-t-10 p-b-10'>";
                            echo "<label class='label'>";
                            echo "<h2 class='title'>QR코드를 핸드폰에 다운로드 해주세요</h2>";
                            echo "<center>이미 생성된 QR코드 입니다.</center>";
                            echo "</label>";
                            echo "<hr/>";
                        }
                        
                        // echo "저장된 파일명 : ".$filePath;
                        // echo "<hr/>";

                        if($afterCheck){

                            echo "<div class='p-t-15'>";
                            echo "<center><img class='img_red' src='".$filePath."' width='300' height='300'/></center>";
                            echo "</div>";
                            echo "<div class='p-t-15'>";
                            echo "<center><a href='".$filePath."' download>";
                            echo "<button class='btn-download'><i class='fa fa-download'></i> QR코드 다운로드</button>"."</a> </center>";
                            echo "</div>";
                        }
                        else{
                            // echo "<div class='p-t-15'>";
                            // echo "<center><img class='img_blue' src='".$filePath."' width='300' height='300'/></center>";
                            // echo "</div>";
                            // echo "<div class='p-t-15'>";
                            // echo "<center><a href='".$filePath."' download>";
                            // echo ""."QR코드 다운로드"."</a> </center>";
                            // echo "</div>";
        
                            echo "<div class='p-t-15'>";
                            echo "<center><img class='img_blue' src='".$filePath."' width='300' height='300'/></center>";
                            echo "</div>";
                            echo "<div class='p-t-15'>";
                            echo "<center><a href='".$filePath."download' download>";
                            echo "<button class='btn-download'><i class='fa fa-download'></i> QR코드 다운로드</button>"."</a> </center>";
                            echo "</div>";
                        }                            
                        ?>     

                        <!-- 안내문구 표시                   -->
                        <div class="p-t-30">
                        <?php
                            echo "<hr/>";
                        ?>
                        </div> 

                        <div class="p-t-15">                        
                            <center>
                                <h2 class="title_info">QR코드 다운로드 안 될 때</h2>
                                <label class="label"><br> *일부 브라우저에선 [QR코드 다운로드]가 안 될 수 있습니다. <br>아래 방법을 참고해주세요 </label> 
                            </center>

                            <div class="p-t-10">
                                <label class="label"> <b>QR코드 다운받는 다른 방법(아이폰, 안드로이드 동일)</b>
                                <br> ① 화면 캡처 
                                <br> ② 이미지 2초 이상 탭 → 이미지 저장 탭 (아래 이미지 참고) 
                                </label>  
                                <br>
                            </div>

                            <center>
                                <!-- <img src="./resource/info/2_save_image.png" width="432" height="787"/> -->
                                <img src="./resource/info/2_save_image.png" style="width: 100%; height: auto;"/>

                            </center>
                        </div>   
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->