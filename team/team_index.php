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
  h2 {
    text-align: center;
    font-size: 20px;
  }
  table {margin: auto; width: 80%; text-align: center;}

  #im {text-align: center;}
  #ma {
    margin: auto; width: 60%
    margin-left: 23%;
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
          <?php include "./team_view.php" ?>
        </section>

        <footer>
            <?php include "../lib/footer.php" ?>
        </footer>

    </body>
</html>
