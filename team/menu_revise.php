<?php
  $con = mysqli_connect("localhost", "root", "6342", "resDB") or die("MySQL 접속 실패!!");

  $sql = "select * from menu where menuNo ='".$_GET['menuNo']."'";

  $ret = mysqli_query($con, $sql);
  if($ret){
    $count = mysqli_num_rows($ret);
    if($count==0){
      echo $_GET['menuNo']." 번호의 메뉴가 없습니다."."<br>";
      echo "<br> <a href='./team_index.php'> <--기타관리 화면으로 돌아가기</a> ";
      exit();
    }
  }
  else {
    echo "데이터 검색 실패"."<br>";
    echo "실패 원인 :".mysqli_error($con);
    echo "<br> <a href='./team_index.php'> <--기타관리 화면으로 돌아가기</a> ";
    exit();
  }
  $row = mysqli_fetch_array($ret);

  $menuNo = $row['menuNo'];
  $menuName = $row["menuName"];
  $price = $row["price"];
  $chefId = $row["chefId"];

 ?>

 <html>
 <head>
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
</head>
<body>

  <h1> 메뉴 정보 수정 </h1>
  <br>
  <div id="im"> <img src="../img/bar1.PNG" width="80%" > </div>
  <br>
  <div id ='ma'>
    <form method="post" action="./menu_revise_result.php">
      메뉴번호 : <input type="text" name="menuNo" value=<?php echo $menuNo ?>> <br>
      메뉴명 : <input type="text" name="menuName" value=<?php echo $menuName ?>> <br>
      가격 : <input type="text" name="price" value=<?php echo $price ?>> <br>
      요리사 아이디 : <input type="text" name="chefId" value=<?php echo $chefId ?>> <br>
      <br><br>
      <input type="submit" value="정보 수정">
    </form>
    </div>

</body>
</html>
