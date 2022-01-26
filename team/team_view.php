<?php
  $con = mysqli_connect("localhost", "root", "6342", "resdb") or die ("MySQL 접속 실패");

  $sql1 = "select * from chef";
  $sql2 = "select * from staff";

  $ret1 = mysqli_query($con, $sql1);
  $ret2 = mysqli_query($con, $sql2);

  if($ret1){
    $count1 = mysqli_num_rows($ret1);
  }
  else{
    echo "chef 데이터 검색 실패"."<br>";
    echo "실패 원인 :".mysqli_error($con);
    exit();
  }
  if($ret2){
    $count2 = mysqli_num_rows($ret2);
  }
  else{
    echo "staff 데이터 검색 실패"."<br>";
    echo "실패 원인 :".mysqli_error($con);
    exit();
  }

  echo "<h1>팀에 속한 스텝 구성 정보</h1>";
  echo "<br>
  <div id='im'> <img src='../img/bar1.PNG' width='70%' > </div>
  <br>";

  while($row1 = mysqli_fetch_array($ret1)){
    echo "<h2><br><li type='square'>", $row1['chefTeam'], "팀에 속한 ", $row1['chefName'], " 요리사의 팀 구성<br></h2>";
    echo "<br><div id='ma'>";
    echo "<table border=1>";
      echo "<tr>";
          echo "<th>아이디</th> <th>이름</th> <th>전화번호</th>";
      echo "</tr>";
      while($row2 = mysqli_fetch_array($ret2)){
        if($row1['chefTeam'] == $row2['staffTeam']){
          echo "<tr>";
            echo "<td>", $row2['staffId'], "</td>";
            echo "<td>", $row2['staffName'], "</td>";
            echo "<td>", $row2['staffPhone'], "</td>";
          echo "</tr>";
        }
      }
    mysqli_data_seek($ret2, 0);
    echo "</table>";
    echo "<br>";
    echo "</div>";
  }
  mysqli_close($con);

 ?>
