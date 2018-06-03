<?php
  session_start();

 ?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
 <meta charset="utf-8"/>
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
 <title>Logowanko</title>
</head>
<body>

    <?php
      echo"<p>Witaj</p>".$_SESSION['UserName']."!";
    ?>
    <h1>Wprowadź nowy produkt</h1>
    <form action="baza.php" method="post">
      <table>
        <td><tr>Podaj nazwę:</tr><tr>
          <input type="text" name="NazwaTowaru">
        </tr></td> <td><tr>
          Podaj cenę:
        </tr><tr>
          <input type="text" value="Cena">
        </tr></td>
      </table>
      <input type="submit" value="Zapisz">
    </form>





</body>

</html>
