<?php
  $con = mysqli_connect("localhost", "root", "6342", "resDB") or die("MySQL 접속 실패!!");

  $cusId = $_POST["cusId"];
  $cus_count = $_POST["cus_count"];
  $day_date = $_POST["day_date"];
  $resNo = $_POST['resNo'];

  $sql = "update reserve_record set cusId='".$cusId."', cus_count='".$cus_count."', day_date='".$day_date."' where cusId='".$cusId."'";

  $ret = mysqli_query($con, $sql);
 ?>

 <style>
   section {margin: 45px;}
   section {
     background-image: url('../img/back2.png');
     background-repeat: no-no-repeat;
     background-size: cover;
     background-position: 50% 50%;
   }
   h1 {
     text-align: center;
     font-size: 25px;
   }
   #im {text-align: center;}
   #ma {
     text-align: center;
     margin-left: 23%;
     border: 2px solid  #25587a;
     padding:10px;
     width: 50%;
     font-size: 18px;
     font-weight: 600;
   }

 </style>

<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAHA Restaurant</title>

    <link rel="stylesheet" href="../css/common.css">
  </head>
  <body>
    <header>
      <?php include "../lib/cus_header.php" ?>
    </header>

    <section>
      <?php
      echo "<h1>예약 정보 수정 결과</h1>";
      echo "<br><div id='im'> <img src='../img/bar1.PNG' width='80%' > </div><br>";
      echo "<div id='ma'>";
      if($ret){
        echo "예약 정보가 성공적으로 수정됨.";
      }
      else {
        echo "예약 정보 수정 실패"."<br>";
        echo "실패 원인 :".mysqli_error($con);
      }
      mysqli_close($con);

      echo "<br><br> <a href='./cus_index.php'> <--고객관리 화면으로 돌아가기 </a> ";
      echo "</div>";
      ?>
    </div>
    </section>

    <footer>
      <?php include "../lib/footer.php" ?>
    </footer>

  </body>
 </html>
