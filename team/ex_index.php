<!DOCTYPE html>

<style>
  section {margin: 45px;}
  section {
    background-image: url('../img/back2.png');
    background-repeat: no-no-repeat;
    background-size: cover;
    background-position: 50% 50%;
  }
  h1 {
    text-align: center;
    font-size: 25px;
  }
  #im {text-align: center;}
  #ma {
    margin: auto; width: 60%
    margin-left: 23%;
    border: 2px solid  #25587a;
    padding:10px;
    width: 50%;
    font-size: 18px;
    font-weight: 500;
  }

</style>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HAHA Restaurant</title>
        <link rel="stylesheet" href="../css/common.css">

    </head>
    <body>
        <header>
          <?php include "../lib/team_header.php" ?>
        </header>

        <section>
          <h1> HAHA 레스토랑 [직원 관리 시스템] </h1>
          <br>
          <div id="im"> <img src="../img/bar1.PNG" width="70%" > </div>
          <br>
          <div id='ma'>
            <li type="square"> <a href = './team_index.php'> 팀 조회 </a> <br><br>
            <li type="square"> <a href = './menu_index.php'> 메뉴 조회 </a> <br><br>
            <li type="square"> <a href = './menu_index_insert.php'> 메뉴 추가 </a> <br><br>
            <form method="get" action="./menu_index_revise.php">
              <li type="square">
              메뉴 정보 수정 - 메뉴번호 : <input type="text" name="menuNo">
              <input type="submit" value="삭제">
            </form><br>
            <form method="get" action="./menu_index_delete.php">
              <li type="square">
              메뉴 삭제 - 메뉴번호 : <input type="text" name="menuNo">
              <input type="submit" value="삭제">
            </form><br>
          </div>
        </section>

        <footer>
            <?php include "../lib/footer.php" ?>
        </footer>

    </body>
</html>
