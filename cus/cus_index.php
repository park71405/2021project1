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
    font-size: 19px;
    font-weight: 500;
  }

</style>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HAHA Restaurant</title>

        <link rel="stylesheet" href="../css/common.css" type="text/css">
    </head>
    <body>
        <header>
          <?php include "../lib/cus_header.php" ?>
        </header>

        <section>
          <br>
          <h1> HAHA 레스토랑 [고객 관리 시스템] </h1>
          <br>
          <div id="im"> <img src="../img/bar1.PNG" width="70%" > </div>
          <br>
          <div id="ma">
            <li type="square"> <a href = './res_index_view.php'> 예약 조회(수정,삭제 가능) </a> <br><br>
            <li type="square"> <a href = './res_index_res.php'> 예약 추가 </a> <br><br>
            <li type="square"> <a href = './cus_index_view.php'> 고객 조회(수정,삭제 가능) </a> <br><br>
            <li type="square"> <a href = './cus_index_res.php'> 고객 추가 </a> <br><br>
          </div>
        </section>

        <footer>
            <?php include "../lib/footer.php" ?>
        </footer>

    </body>
</html>
