<?php
  $con = mysqli_connect("localhost", "root", "6342", "resDB") or die("MySQL 접속 실패!!");

  $sql = "select * from staff where staffId ='".$_GET['staffId']."'";

  $ret = mysqli_query($con, $sql);
  if($ret){
    $count = mysqli_num_rows($ret);
    if($count==0){
      echo $_GET['staffId']." 아이디의 스텝이 없습니다."."<br>";
      echo "<br> <a href='./emp_index.php'> <--직원관리 화면으로 돌아가기</a> ";
      exit();
    }
  }
  else {
    echo "데이터 검색 실패"."<br>";
    echo "실패 원인 :".mysqli_error($con);
    echo "<br> <a href='./emp_index.php'> <--직원관리 화면으로 돌아가기</a> ";
    exit();
  }
  $row = mysqli_fetch_array($ret);

  $staffId = $row['staffId'];
  $staffName = $row["staffName"];
  $staffPhone = $row["staffPhone"];
  $staffPassword = $row["staffPassword"];
  $staffsalary = $row["staffsalary"];
  $staffTeam = $row["staffTeam"];

 ?>

 <html>
 <head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>

  <h1> 스텝 정보 수정 </h1>
  <br>
  <div id="im"> <img src="../img/bar1.PNG" width="80%" > </div>
  <br>
  <div id ='ma'>
    <form method="post" action="./staff_revise_result.php">
      아이디 : <input type="text" name="staffId" value=<?php echo $staffId ?>> <br>
      이름 : <input type="text" name="staffName" value=<?php echo $staffName ?>> <br>
      전화번호 : <input type="text" name="staffPhone" value=<?php echo $staffPhone ?>> <br>
      비밀번호 : <input type="text" name="staffPassword" value=<?php echo $staffPassword ?>> <br>
      월급 : <input type="text" name="staffsalary" value=<?php echo $staffsalary ?>> <br>
      속한 팀 : <input type="text" name="staffTeam" value=<?php echo $staffTeam ?>> <br>
      <br><br>
      <input type="submit" value="정보 수정">
  </div>
  </form>

</body>
</html>
