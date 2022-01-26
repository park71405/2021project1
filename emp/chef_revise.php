<?php
  $con = mysqli_connect("localhost", "root", "6342", "resDB") or die("MySQL 접속 실패!!");

  $sql = "select * from chef where chefId ='".$_GET['chefId']."'";

  $ret = mysqli_query($con, $sql);
  if($ret){
    $count = mysqli_num_rows($ret);
    if($count==0){
      echo $_GET['chefId']." 아이디의 요리사가 없습니다."."<br>";
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

  $chefId = $row['chefId'];
  $chefName = $row["chefName"];
  $chefPhone = $row["chefPhone"];
  $chefPassword = $row["chefPassword"];
  $career = $row['career'];
  $chefsalary = $row['chefsalary'];
  $chefTeam = $row['chefTeam'];
 ?>

 <html>
 <head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>

  <h1> 요리사 정보 수정 </h1>
  <br>
  <div id="im"> <img src="../img/bar1.PNG" width="80%" > </div>
  <br>
  <div id ='ma'>
    <form method="post" action="./chef_revise_result.php">
      아이디 : <input type="text" name="chefId" value=<?php echo $chefId ?>> <br>
      이름 : <input type="text" name="chefName" value=<?php echo $chefName ?>> <br>
      전화번호 : <input type="text" name="chefPhone" value=<?php echo $chefPhone ?>> <br>
      비밀번호 : <input type="text" name="chefPassword" value=<?php echo $chefPassword ?>> <br>
      경력 : <input type="text" name="career" value=<?php echo $career ?>> <br>
      월급: <input type="text" name="chefsalary" value=<?php echo $chefsalary ?>> <br>
      속한팀: <input type="text" name="chefTeam" value=<?php echo $chefTeam ?>> <br>
      <br><br>
      <input type="submit" value="수정">
    </div>
  </form>

</body>
</html>
