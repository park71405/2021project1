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
  h2 {text-align: center;}
  form{margin: auto; width: 60%}

  #cust {
    border: 2px solid  #25587a;
    margin: 10px;
    padding: 10px;
    font-size: 17px;
    text-align: center;
  }
  #meal {
    border: 2px solid  #25587a;
    margin: 10px;
    padding: 10px;
    font-size: 17px;
    text-align: center;
  }

  #im {text-align: center;}
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

            <?php include "../lib/cus_header.php" ?>
        </header>

        <section>
          <div id="h1">
            <h1> 레스토랑 예약 </h1>
            <br>
            <div id="im"> <img src="../img/bar1.PNG" width="70%" > </div>
            <br>
          </div>
          <div id="reser">
            <form method="post" action="./res_res_result.php">
              <div id="h2">
                <br>
                <h2> 예약 정보 </h2>
              </div>
              <div id="cust">
                예약번호 : <input type="text" name="resNo"> <br>
                아이디 : <input type="text" name="cusId"> <br>
                예약일 : <input type="text" name="day_date"> <br>
                예약인원: <input type="text" name="cus_count"> <br>
              <br><br>
              <div id="but">
                <input type="submit" value="예약 확정">
              </div>
            </div>
            </form>
          </div>
        </section>

        <footer>
            <?php include "../lib/footer.php" ?>
        </footer>

    </body>
</html>
