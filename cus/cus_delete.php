<?php
  $con = mysqli_connect("localhost", "root", "6342", "resDB") or die("MySQL 접속 실패!!!");
  $sql = "select * from customer where cusId='".$_GET['cusId']."'";

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
    echo "고객 조회 실패!!"."<br>";
    echo "실패 원인 :".mysqli_error($con);
    echo "<br> <a href='cus_index.php'> <-- 고객관리 화면으로 돌아가기</a>";
    exit();
  }

  $row = mysqli_fetch_array($ret);
  $cusId = $row['cusId'];
  $cusName = $row['cusName'];

 ?>

 <html>
 <head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>
  <h1> 고객 삭제 </h1>
  <br>
  <div id="im"> <img src="../img/bar1.PNG" width="70%" > </div>
  <br>
  <div id='ma'>
    <form method="post" action="./cus_delete_result.php">
      고객 아이디 : <input type = "text" name="cusId" value=<?php echo $cusId ?> readonly> <br>
      고객 이름 : <input type = "text" name="cusName" value=<?php echo $cusName ?> readonly>

      <br><br>
      위의 고객의 정보를 삭제하시겠습니까?
      <input type = "submit" value="삭제">
    </form>
  </div>
</body>
</html>
