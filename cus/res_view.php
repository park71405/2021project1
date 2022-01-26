<?php
  $con = mysqli_connect("localhost", "root", "6342", "resDB") or die("MySQL 접속 실패!!");

  $sql1 = "select * from reserve_record";

  $ret1 = mysqli_query($con, $sql1);
  if($ret1) {
    $count1 = mysqli_num_rows($ret1);
  }
  else {
    echo "reserve_record 데이터 검색 실패!!!"."<br>";
    echo "실패 원인 :".mysqli_error($con);
    exit();
  }

  echo "<h1> 예약 정보 검색 걸과</h1>";

  echo "
    <div id='im'>
      <br><img src='../img/bar1.PNG' width: '80%'><br>
    </div>";

  echo "<div id='ma'><br><br>";
  echo "<table border=1>";
  echo "<tr>";
  echo "<th>번호</th> <th>아이디</th> <th>예약일</th> <th>예약인원</th>";
  echo "</tr>";
  while($row1 = mysqli_fetch_array($ret1)) {
    echo "<tr>";
    echo "<td>", $row1['resNo'], "</td>";
    echo "<td>", $row1['cusId'], "</td>";
    echo "<td>", $row1['day_date'], "</td>";
    echo "<td>", $row1['cus_count'], "</td>";
    echo "<td>", "<a href='./res_index_revise.php?cusId=", $row1['cusId'], "'>수정</a></td>";
    echo "<td>", "<a href='./res_index_delete.php?cusId=", $row1['cusId'], "'>삭제</a></td>";
  }
  echo "</tr>";
  echo "</table>";


  mysqli_close($con);
  echo "<br> <a href='./cus_index.php'> <-- 고객 관리화면으로 돌아가기 </a> ";
  echo "</div>";
?>
