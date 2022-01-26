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
  h2 {text-align: center;}
  form{margin: auto; width: 60%}

  #cust {
    border: 2px solid  #25587a;
    margin: 10px;
    padding: 10px;
    font-size: 17px;
    font-weight: 600;
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
          <?php include "../lib/team_header.php" ?>
        </header>

        <section>
          <?php include "./menu_insert.php" ?>
        </section>

        <footer>
            <?php include "../lib/footer.php" ?>
        </footer>

    </body>
</html>
