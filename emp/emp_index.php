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
          <?php include "../lib/emp_header.php" ?>
        </header>

        <section>
          <h1> HAHA 레스토랑 [직원 관리 시스템] </h1>
          <br>
          <div id="im"> <img src="../img/bar1.PNG" width="70%" > </div>
          <br>
          <div id='ma'>
          <li type="square"> <a href = './chef_index_view.php'> 요리사 조회 </a> <br><br>
          <li type="square"> <a href = './chef_index_insert.php'> 요리사 추가 </a> <br><br>
          <form method="get" action="./chef_index_revise.php">
            <li type="square">
            요리사 정보 수정 - 요리사 아이디  : <input type="text" name="chefId">
            <input type="submit" value="수정">
          </form>
          <br>
          <form method="get" action="./chef_index_delete.php">
            <li type="square">
            요리사 삭제 - 요리사 아이디 : <input type="text" name="chefId">
            <input type="submit" value="삭제">
          </form><br>
          <li type="square"> <a href = './staff_index_view.php'> 스텝 조회 </a> <br><br>
          <li type="square"> <a href = './staff_index_insert.php'> 스텝 추가 </a> <br><br>
          <form method="get" action="./staff_index_revise.php">
            <li type="square">
            스텝 정보 수정 - 스텝 아이디  : <input type="text" name="staffId">
            <input type="submit" value="수정">
          </form>
          <br>
          <form method="get" action="./staff_index_delete.php">
            <li type="square"> 
            스텝 삭제 - 스텝 아이디 : <input type="text" name="staffId">
            <input type="submit" value="삭제">
          </form>
        </div>
        </section>

        <footer>
            <?php include "../lib/footer.php" ?>
        </footer>

    </body>
</html>
