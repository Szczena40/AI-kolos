<html>
<meta charset="utf-8">
<head><title>Nowy produkt</title>
  <body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "magazyn";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error){
          die("Utracono połączenie: ".$conn->connect_error);
        }
        $q1 = $_POST['NazwaTowaru'];
        $q2 = $_POST['Cena'];
        $sql = "INSERT INTO towar (NazwaTowaru, Cena)
        VALUES ('$q1', '$q2')";

        if ($conn->query($sql)===TRUE){
          echo "Dodano produkt";
        } else {
          echo "Błąd: ".$sql."<br>".$conn->error;
        }

        $conn->close();

    ?>
