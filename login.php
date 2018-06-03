
 <?php

    session_start();

    require_once "connect.php";

    $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

    if($polaczenie->connect_errno!=0)
    {
      echo "Error: ".$polaczenie->connect_errno;
    }
    else
    {
      $login = $_POST['login'];
      $password = $_POST['password'];

      $sql="SELECT*FROM users WHERE UserName='$login' AND UserPassword='$password'";

      if($result = @$polaczenie->query($sql))
      {
        $l_users = $result->num_rows;
        if($l_users>0)
        {
          $wiersz = $result->fetch_assoc();
          $_SESSION['UserName']=$wiersz['UserName'];



          $result->free_result();
          header('Location: produkty.php');


        }else{

        }

      }

      $polaczenie->close();
    }





  ?>
