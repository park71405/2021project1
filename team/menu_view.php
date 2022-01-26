<?php
  $con = mysqli_connect("localhost", "root", "6342", "resdb") or die ("MySQL 접속 실패");

  $sql = "select * from menu";

  $ret = mysqli_query($con, $sql);

  if($ret){
  }
  else{
    echo "메뉴 검색 실패"."<br><br>";
    echo "실패 원인 :".mysqli_error($con);
    exit();
  }

  echo "<h1>전체 메뉴</h1>";

  echo "
    <div id='im'>
      <br><img src='../img/bar1.PNG' width: '80%'><br>
    </div>";

  echo "<div id='ma'><br><br>";
  echo "<table border=1>";
  echo "<tr>";
  echo "<th>메뉴번호</th> <th>메뉴명</th> <th>가격</th> <th>요리사 아이디</th>";
  echo "</tr>";
  while($row = mysqli_fetch_array($ret)){
    echo "<tr>";
    echo "<td>", $row['menuNo'], "</td>";
    echo "<td>", $row['menuName'], "</td>";
    echo "<td>", $row['price'], "</td>";
    echo "<td>", $row['chefId'], "</td>";
    echo "<td>", "<a href='menu_index_revise.php?menuNo=", $row['menuNo'], "'>수정</a></td>";
    echo "<td>", "<a href='menu_index_delete.php?menuNo=", $row['menuNo'], "'>삭제</a></td>";
    echo "</tr>";
  }

  mysqli_close($con);
  echo "</table><br><br>";
  echo "</div>";
?>
