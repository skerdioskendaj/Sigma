
<?php
require_once ("lidhjameDB.php");
if(isset($_POST['Update']))
{

  $ID= $_GET["ID"] ;
  $Emri= $_POST["first"] ;
  $Mbiemri= $_POST["last"] ;
  $Emaili=$_POST["email"];
  $Karte = $_POST["Kid"] ;
  $Passwordi =$_POST["pwd"];
  $Roli =$_POST["roli"];
  $mosha =$_POST["mosha"];
  $qyteti=$_POST['qyteti'];
  $partia=$_POST['partia'];
  $platforma=$_POST['platforma'];



$query= "UPDATE tbluser SET
 Firstname='".$Emri."' , Lastname='".$Mbiemri."' ,
  Email= '".$Emaili."' ,KarteID='".$Karte."', Password='".$Passwordi."', Mosha='".$mosha."',  Roli='".$Roli."'
  WHERE ID ='".$ID."' ";

   $result=mysqli_query($conn,$query);

if($result)
{
//  header("Location: anotherDirectory/anotherFile.php");
  header("location:Modifiko.php");
}
else {
  echo "Kontrollo te dhenat";
}
}
else {
  header("location:Modifiko.php");
}
?>
