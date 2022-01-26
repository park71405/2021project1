<?php
  $con = mysqli_connect("localhost", "root", "6342", "resDB") or die("MySQL 접속 실패!!!");
  $sql = "select * from staff where staffId='".$_GET['staffId']."'";

  $ret = mysqli_query($con, $sql);
  if($ret){
    $count = mysqli_num_rows($ret);
    if($count==0){
      echo $_GET['staffId']." 아이디의 스텝이 없습니다."."<br>";
      echo "<br> <a href='./emp_index.php'> <-- 직원관리 화면으로 돌아가기</a> ";
      exit();
    }
  }
  else {
    echo "예약 정보 조회 실패!!"."<br>";
    echo "실패 원인 :".mysqli_error($con);
    echo "<br> <a href='emp_index.php'> <-- 직원관리 화면으로 돌아가기</a>";
    exit();
  }
  $row = mysqli_fetch_array($ret);
  $staffId = $row['staffId'];
  $staffName = $row['staffName'];

 ?>

 <html>
 <head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>
  <h1> 스텝 삭제 </h1>
  <br>
  <div id="im"> <img src="../img/bar1.PNG" width="70%" > </div>
  <br>
  <div id='ma'>
  <form method="post" action="./staff_delete_result.php">
    스텝 아이디 : <input type = "text" name="staffId" value=<?php echo $staffId ?> readonly> <br>
    스텝 이름 : <input type = "text" name="staffName" value=<?php echo $staffName ?> readonly>
    <br>
    <br><br>
    위의 스텝의 정보를 삭제하시겠습니까?
    <input type = "submit" value="삭제">
  </form>
  </div>
</body>
</html>
