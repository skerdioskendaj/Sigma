
<?php
require_once ("lidhjameDB.php");
$ID=$_GET['GetID'];
$query = "SELECT * FROM tbluser WHERE ID = '".$ID."'";
$result=mysqli_query($conn,$query);

  while ($row=mysqli_fetch_assoc($result)) {
  //  $IDK= $row["user_id"];
    //$Emri =  $row["user_first"] ;
    //$Mbiemri = $row["user_last"];
    //$Emaili = $row["user_email"] ;
    //$UserID = $row["user_uid"] ;
    //$row$Paswordi = $row["user_pwd"];

    $ID= $row["ID"] ;
    $Emri= $row["Firstname"] ;
    $Mbiemri= $row["Lastname"] ;
    $Emaili=$row["Email"];
    $Karte = $row["KarteID"] ;
    $Passwordi =$row["Password"];
    $Roli =$row["Roli"];
    $mosha =$row["Mosha"];
    //$partia=$row["Partia"];
    //$qyteti=$row["Qyteti"];
    //$platforma=$row["Platforma"];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset "UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="stili.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
  <!--jquery popper-->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  </head>

  <body class="bg-dark">
    <div class="container">
      <div class="row">
       <div class="col-lg-6 m-auto">
         <div class="card mt-5">
           <div class="card-title">
             <h3 class="bg-success text-white-center py-3">Modifiko te dhenat</h3>
          </div>
          <div class="card-body">

    <form action="update.php?ID= <?php echo $ID?>" method="POST">


           <input type="text" name="Kid" class="form-control mb-2" placeholder="KarteID" value="<?php echo $Karte?>">
             <input type="text" name="first" class="form-control mb-2" placeholder="firstname" class="input-text" value="<?php echo $Emri?>" >
             <input type="text" name="last" class="form-control mb-2" placeholder="lastname" value="<?php echo $Mbiemri?>">
             <input type="text" name="mosha" class="form-control mb-2" placeholder="Mosha" value="<?php echo $mosha?>">
             <input type="text" name="email" class="form-control mb-2" placeholder="E-mail" value="<?php echo $Emaili?>">
             <!--<input type="text" name="partia"  class="form-control mb-2" placeholder="Partia"value="<?php echo $partia?>">
             <input type="text" name="qyteti"  class="form-control mb-2" placeholder="Qyteti"value="<?php echo $qyteti?>">
             <textarea rows="4" cols="50" name="platforma"  class="form-control mb-2" placeholder="Platforma"value="<?php echo $platforma?>"> <?php echo $platforma?>"
</textarea>-->
             <input type="password" name="pwd"  class="form-control mb-2"  value="<?php echo $Passwordi?>">
             <input type="text" name="roli"  class="form-control mb-2" placeholder="Roli"  value="<?php echo $Roli?>">
           <button class="btn btn-primary" id="btn1"  name="Update">Update</button>

    </form>
         </div>
        </div>
       </div>
      </div>
     </div>
    </body>
</html>
