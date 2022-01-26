<?php
  $con = mysqli_connect("localhost", "root", "6342", "resDB") or die("MySQL 접속 실패!!");

  $sql = "select * from customer where cusId ='".$_GET['cusId']."'";

  $ret = mysqli_query($con, $sql);
  if($ret){
    $count = mysqli_num_rows($ret);
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
  $row = mysqli_fetch_array($ret);

  $cusId = $row['cusId'];
  $cusName = $row["cusName"];
  $cusPhone = $row["cusPhone"];
  $cusPassword = $row["cusPassword"];

 ?>

 <html>
 <head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>

  <h1> 고객 정보 수정 </h1>
  <br>
  <div id="im"> <img src="../img/bar1.PNG" width="80%" > </div>
  <br>
  <div id ='ma'>
    <form method="post" action="./cus_revise_result.php">
      아이디 : <input type="text" name="cusId" value=<?php echo $cusId ?>> <br>
      이름 : <input type="text" name="cusName" value=<?php echo $cusName ?>> <br>
      전화번호 : <input type="text" name="cusPhone" value=<?php echo $cusPhone ?>> <br>
      비밀번호 : <input type="text" name="cusPassword" value=<?php echo $cusPassword ?>> <br>
      <br>
      <input type="submit" value="정보 수정">
  </div>
  </form>

</body>
</html>
