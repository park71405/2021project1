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
    font-weight: 500;
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
        <link rel="stylesheet" href="../css/cus_reservation.css">
    </head>
    <body>
        <header>
            <?php include "../lib/emp_header.php" ?>
        </header>

        <section>
          <div id="h1">
            <br>
            <h1> <스텝 추가> </h1>
          </div>
          <div id="im"> <img src="../img/bar1.PNG" width="70%" > </div>
          <br>
          <div id="reser">
            <form method="post" action="./staff_insert_result.php">
              <div id="h2">
                <br>
                <h2> 스텝 정보 </h2>
              </div>
              <div id="cust">
                아이디 : <input type="text" name="staffId"> <br>
                비밀번호 : <input type="text" name="staffPassword"> <br>
                이름: <input type="text" name="staffName"> <br>
                전화번호 : <input type="text" name="staffPhone"> <br>
                월급 : <input type="text" name="staffsalary"> <br>
                속한 팀 : <input type="text" name="staffTeam"> <br>
              <br><br>
              <div id="butt">
                <input type="submit" value="확정">
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
