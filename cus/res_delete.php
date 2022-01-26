<?php
  $con = mysqli_connect("localhost", "root", "6342", "resDB") or die("MySQL 접속 실패!!!");
  $sql = "select * from reserve_record where cusId='".$_GET['cusId']."'";

  $ret = mysqli_query($con, $sql);

  if($ret){
    $count = mysqli_num_rows($ret);
    if($count==0){
      echo $_GET['cusId']." 번호의 회원이 없습니다."."<br>";
      echo "<br> <a href='./cus_index.php'> <-- 고객관리 화면으로 돌아가기</a> ";
      exit();
    }
  }
  else {
    echo "예약 정보 조회 실패!!"."<br>";
    echo "실패 원인 :".mysqli_error($con);
    echo "<br> <a href='cus_index.php'> <-- 고객관리 화면으로 돌아가기</a>";
    exit();
  }

  $row = mysqli_fetch_array($ret);
  $cusId = $row['cusId'];
  $day_date = $row['day_date'];
  $resNo = $row['resNo'];

 ?>

 <html>
 <head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>
  <h1> 예약 취소 </h1>
  <br>
  <div id="im"> <img src="../img/bar1.PNG" width="70%" > </div>
  <br>
  <div id='ma'>
    <form method="post" action="./res_delete_result.php">
      아래 고객의 예약을 취소하시겠습니까?
      <br><br>
      번호 : <input type = "text" name="resNo" value=<?php echo $resNo ?>> <br>
      고객 아이디 : <input type = "text" name="cusId" value=<?php echo $cusId ?>> <br>
      예약일 : <input type = "text" name="day_date" value=<?php echo $day_date ?>>
      <br><br>
      <input type = "submit" value="취소">
    </form>
  </div>
</body>
</html>
