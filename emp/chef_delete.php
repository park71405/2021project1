<?php
  $con = mysqli_connect("localhost", "root", "6342", "resDB") or die("MySQL 접속 실패!!!");
  $sql = "select * from chef where chefId='".$_GET['chefId']."'";

  $ret = mysqli_query($con, $sql);
  if($ret){
    $count = mysqli_num_rows($ret);
    if($count==0){
      echo $_GET['chefId']." 아이디의 요리사 없습니다."."<br>";
      echo "<br> <a href='./emp_index.php'> <-- 직원관리 화면으로 돌아가기</a> ";
      exit();
    }
  }
  else {
    echo "요리사 정보 조회 실패!!"."<br>";
    echo "실패 원인 :".mysqli_error($con);
    echo "<br> <a href='emp_index.php'> <-- 직원관리 화면으로 돌아가기</a>";
    exit();
  }
  $row = mysqli_fetch_array($ret);
  $chefId = $row['chefId'];
  $chefName = $row['chefName'];

 ?>

 <html>
 <head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>
  <h1> 요리사 정보 삭제 </h1>
  <br>
  <div id="im"> <img src="../img/bar1.PNG" width="70%" > </div>
  <br>
  <div id='ma'>
    <form method="post" action="./chef_delete_result.php">
      요리사 아이디 : <input type = "text" name="chefId" value=<?php echo $chefId ?> readonly> <br>
      요리사 이름 : <input type = "text" name="chefName" value=<?php echo $chefName ?> readonly>
      <br>
      <br><br>
      위의 요리사의 정보를 삭제하시겠습니까?
      <input type = "submit" value="삭제">
    </form>
  </div>
</body>
</html>
