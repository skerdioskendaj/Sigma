<?php
require_once ('lidhjameDB.php');

if(isset($_POST['deletedata']))

{
  $ID=$_POST['delete_id'];

$query= "Delete from tbluser where ID = '".$ID."' ";
$result=  mysqli_query($conn,$query);

if($result)
{
  header("location:Modifiko.php");

}
else
{
  echo "Kontrollo gabimin";
}
}
?>
