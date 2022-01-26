<?php
  $con = mysqli_connect("localhost", "root", "6342", "resDB") or die("MySQL 접속 실패!!");

  $sqli = "select * from reserve_record where cusId ='".$_GET['cusId']."'";

  $reti = mysqli_query($con, $sqli);
  if($reti){
    $count = mysqli_num_rows($reti);
    if($count==0){
      echo $_GET['cusId']." 아이디의 고객의 없습니다."."<br>";
      echo "<br> <a href='./cus_index.php'> <--고객관리 화면으로 돌아가기</a> ";
      exit();
    }
  }
  else {
    echo "데이터 검색 실패"."<br>";
    echo "실패 원인 :".mysqli_error($con);
    echo "<br> <a href='./cus_index.php'> <--고객관리 화면으로 돌아가기</a> ";
    exit();
  }
  $rowi = mysqli_fetch_array($reti);

  $cusId = $rowi['cusId'];
  $day_date = $rowi['day_date'];
  $cus_count = $rowi['cus_count'];
  $resNo = $rowi['resNo'];

 ?>

 <html>
 <head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>

  <h1> 고객 예약 수정 </h1>
  <br>
  <div id="im"> <img src="../img/bar1.PNG" width="80%" > </div>
  <br>
  <div id ='ma'>
    <form method="post" action="./res_revise_result.php">
      번호 : <input type="text" name="resNo" value=<?php echo $resNo ?>> <br>
      아이디 : <input type="text" name="cusId" value=<?php echo $cusId ?>> <br>
      예약일 : <input type="text" name="day_date" value=<?php echo $day_date ?>> <br>
      예) 20200101 <br>
      예약 인원: <input type="text" name="cus_count" value=<?php echo $cus_count ?>> <br>
      <br>
      <input type="submit" value="정보 수정">
  </div>
  </form>

</body>
</html>
