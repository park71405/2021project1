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
    font-size: 27px;
  }
  #im {
    text-align: center;
  }
  #ma {
    margin-left: 23%;
    padding:10px;
    width: 90%;
    font-size: 18px;
  }
  table{
    text-align: center;
    width: 60%;
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
          <?php include "./menu_view.php" ?>
        </section>

        <footer>
            <?php include "../lib/footer.php" ?>
        </footer>

    </body>
</html>
