<?php
  $con = mysqli_connect("localhost", "root", "6342", "resDB") or die("MySQL 접속 실패!!");

  $sql = "select * from chef";

  $ret = mysqli_query($con, $sql);
  if($ret) {
    $count = mysqli_num_rows($ret);
  }
  else {
    echo "chef 데이터 검색 실패!!!"."<br>";
    echo "실패 원인 :".mysqli_error($con);
    exit();
  }

  echo "<h1> 요리사 검색 결과</h1>";

  echo "
    <div id='im'>
      <br><img src='../img/bar1.PNG' width: '80%'><br>
    </div>";

  echo "<div id='ma'><br><br>";
  echo "<table border=1>";
  echo "<tr>";
  echo "<th>아이디</th> <th>이름</th> <th>전화번호</th> <th>경력</th> <th>월급</th> <th>비밀번호</th> <th>속한팀</th>";
  echo "</tr>";
  while($row = mysqli_fetch_array($ret)) {
    echo "<tr>";
    echo "<td>", $row['chefId'], "</td>";
    echo "<td>", $row['chefName'], "</td>";
    echo "<td>", $row['chefPhone'], "</td>";
    echo "<td>", $row['career'], "</td>";
    echo "<td>", $row['chefsalary'], "</td>";
    echo "<td>", $row['chefPassword'], "</td>";
    echo "<td>", $row['chefTeam'], "</td>";
    echo "<td>", "<a href='./chef_index_revise.php?chefId=", $row['chefId'], "'>수정</a></td>";
    echo "<td>", "<a href='./chef_index_delete.php?chefId=", $row['chefId'], "'>삭제</a></td>";
  }
  echo "</tr>";

  mysqli_close($con);
  echo "</table>";
  echo "<br> <a href='./emp_index.php'> <-- 직원 관리화면으로 돌아가기 </a> ";
  echo "</div>";
?>
