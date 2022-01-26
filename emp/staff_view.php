<?php
  $con = mysqli_connect("localhost", "root", "6342", "resDB") or die("MySQL 접속 실패!!");

  $sql = "select * from staff";

  $ret = mysqli_query($con, $sql);
  if($ret) {
    $count = mysqli_num_rows($ret);
  }
  else {
    echo "staff 데이터 검색 실패!!!"."<br>";
    echo "실패 원인 :".mysqli_error($con);
    exit();
  }

  echo "<h1> 스텝 검색 결과</h1>";

  echo "
    <div id='im'>
      <br><img src='../img/bar1.PNG' width: '80%'><br>
    </div>";

  echo "<div id='ma'><br><br>";
  echo "<table border=1>";
  echo "<tr>";
  echo "<th>아이디</th> <th>이름</th> <th>전화번호</th> <th>월급</th> <th>비밀번호</th> <th>속한팀</th>";
  echo "</tr>";
  while($row = mysqli_fetch_array($ret)) {
    echo "<tr>";
    echo "<td>", $row['staffId'], "</td>";
    echo "<td>", $row['staffName'], "</td>";
    echo "<td>", $row['staffPhone'], "</td>";
    echo "<td>", $row['staffsalary'], "</td>";
    echo "<td>", $row['staffPassword'], "</td>";
    echo "<td>", $row['staffTeam'], "</td>";
    echo "<td>", "<a href='./staff_index_revise.php?staffId=", $row['staffId'], "'>수정</a></td>";
    echo "<td>", "<a href='./staff_index_delete.php?staffId=", $row['staffId'], "'>삭제</a></td>";
    echo "</tr>";
  }

  mysqli_close($con);
  echo "</table>";
  echo "<br> <a href='./emp_index.php'> <-- 직원 관리화면으로 돌아가기 </a> ";
  echo "</div>";
?>
