<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <form  method="post" action="../controller/loginCheckController.php">
  <h1>Login Page</h1>
  Id: <input type="text" name="id"><br>
  Pass:<input type="password" name="pass"><br>

      <?php 
    session_start();
    if(isset($_SESSION['error'])){

        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
     ?>
    <br>


  <button name="submit">Login</button>
  </form>
</body>
</html>
