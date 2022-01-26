<?php
  $con = mysqli_connect("localhost", "root", "6342", "resDB") or die("MySQL 접속 실패!!");

  $sql = "select * from customer";

  $ret = mysqli_query($con, $sql);
  if($ret) {
    $count = mysqli_num_rows($ret);
  }
  else {
    echo "customer 데이터 검색 실패!!!"."<br>";
    echo "실패 원인 :".mysqli_error($con);
    exit();
  }

  echo "<h1> 고객 정보 검색 걸과</h1>";

  echo "
    <div id='im'>
      <br><img src='../img/bar1.PNG' width: '80%'><br>
    </div>";

  echo "<div id='ma'><br><br>";
  echo "<table border=1>";
  echo "<tr>";
  echo "<th>아이디</th> <th>이름</th> <th>전화번호</th> <th>비밀번호</th>";
  echo "</tr>";
  while($row = mysqli_fetch_array($ret)) {
    echo "<tr>";
    echo "<td>", $row['cusId'], "</td>";
    echo "<td>", $row['cusName'], "</td>";
    echo "<td>", $row['cusPhone'], "</td>";
    echo "<td>", $row['cusPassword'], "</td>";
    echo "<td>", "<a href='./cus_index_revise.php?cusId=", $row['cusId'], "'>수정</a></td>";
    echo "<td>", "<a href='./cus_index_delete.php?cusId=", $row['cusId'], "'>삭제</a></td>";
  }
  echo "</tr>";
  echo "</table>";
  echo "<br><br>";

  mysqli_close($con);
  echo "<br> <a href='./cus_index.php'> <-- 고객 관리화면으로 돌아가기 </a> ";
  echo "</div>";
?>
