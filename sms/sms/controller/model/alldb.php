<?php
require_once('db.php');

function auth($id,$pass)
{
   $conn=getConnection();
   $sql="select * from a where id='$id' and pass='$pass'";
   $status=mysqli_query($conn,$sql);
   return $status;
}

?>