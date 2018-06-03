
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"pl-PL\">
<head>
 <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>Firma</title>


</head>

<body>
 <form action="login.php" method="post">

   Login: <br /><input type="text" name="login" /> <br />
   Hasło: <br /><input type="password" name="password" /> <br /><br />
   <input type="submit" value="Zaloguj się"/>


 </form>
 <b>Instrukcja logowania</b>
 <br />
 login: Pracownik
 <br/>
 hasło: amd100
 <br /><br/>
 login: Kierownik
 <br />
 hasło: amd200
 <br />
<h2>Nasze produkty</h2>
 <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "magazyn";

 // Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }

 $sql = "SELECT * FROM towar";
 $result = mysqli_query($conn, $sql);

 if (mysqli_num_rows($result) > 0) {
     // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
         echo "id: " . $row["IdTowaru"]. ", Nazwa: " . $row["NazwaTowaru"]. ", Cena: " . $row["Cena"]. "<br>";
     }
 } else {
     echo "0 results";
 }

 mysqli_close($conn);
 ?>

 <br />
<h2>Faktury</h2>
<br />
 <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "magazyn";

 // Create connection
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }

 $sql = "SELECT * FROM faktury";
 $result = mysqli_query($conn, $sql);

 if (mysqli_num_rows($result) > 0) {
     // output data of each row
     while($row = mysqli_fetch_assoc($result)) {
         echo "id: " . $row["IdFaktury"]. ", Numer Faktury: " . $row["NumerFaktury"]."<br>";
     }
 } else {
     echo "0 results";
 }

 mysqli_close($conn);
 ?>





</body>
</html>
