<?php
require_once ("lidhjameDB.php");

 $query ="SELECT * FROM tbluser";
 $result=mysqli_query($conn,$query);
 ?>


 <html>
      <head>
         <title>Databaza e pergjithshme</title>


         <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
         <!-- -->

           <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
           <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
           <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

           <!--jquery popper-->
           <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>





      </head>

      <body>
        <!-- DELETE ALERTII -->
        <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">KUJDES</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <form  action="delete.php" method="post">
              <div class="modal-body">
        <input type="hidden" name="delete_id" id="delete_id">
        <h4>Je sigurt qe do te fshishe te dhenat??</h4>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">JO.</button>
                <button type="submit" name="deletedata" class="btn btn-primary">Po,Vazhdo.</button>
              </div>
              <form>
            </div>
          </div>
        </div>
        <!--#############################################-->
       <br /><br />
           <div class="container">
                <h3 align="center">Databaza e sistemit</h3>
                <br />
                <div class="table-responsive">
                     <table id="employee_data" class="table table-striped table-bordered">
                        <thead>
                              <tr>
                                     <th>ID</th>
                                     <th>Emri</th>
                                     <th>Mbiemri</th>
                                     <th>Email</th>
                                     <th>Karte</th>
                                     <th>Roli</th>
                                     <th>Mosha</th>
                                 <!--    <th>Partia</th>
                                     <th>Qyeteti</th>
                                     <th>Platfroma</th>-->
                                     <th>Edit</th>
                                     <th>Delete</th>
                            </tr>
                       </thead>
                       <?php
                       while($row = mysqli_fetch_array($result))
                       {
                                     $ID= $row["ID"] ;
                                     $Emri= $row["Firstname"] ;
                                     $Mbiemri= $row["Lastname"] ;
                                     $Emaili=$row["Email"];
                                     $Karte = $row["KarteID"] ;
                                     $Roli =$row["Roli"];
                                     $mosha =$row["Mosha"];
                                   //  $qyteti =$row["Qyteti"];
                                     //$partia =$row["Partia"];
                                   //  $platforma =$row["Platforma"];
                                     ?>
                       <tr>
                                       <td>  <?php echo $ID ?></td>
                                       <td>  <?php echo $Emri  ?></td>
                                       <td>  <?php echo $Mbiemri  ?></td>
                                       <td>  <?php echo $Emaili  ?></td>
                                       <td>  <?php echo $Karte  ?></td>
                                       <td>  <?php echo $Roli  ?></td>
                                       <td>  <?php echo $mosha  ?></td>
                                       <!--<td>  <?php echo $qyteti  ?></td>
                                       <td>  <?php echo $partia  ?></td>
                                       <td>  <?php echo $platforma  ?></td>-->
                                       <td> <a href="edit.php?GetID=<?php echo $ID ?>"> Edit</a></td>
                                       <td>  <button type="button" class="btn btn-danger deletebtn">DELETE </button> </td>
                                     </tr>
                                   <?php
                                 }
                                   ?>
                  </table>
             </div>
        </div>
        <!-- 3 jan bootstrap-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
              <!--Datatable-->
              <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
              <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js">  </script>
              <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<!---->
<script>

$(document).ready(function(){
     $('#employee_data').DataTable();
});
</script>

<script>
$(document).ready(function () {
  $('.deletebtn').on('click', function(){

    $('#deletemodal').modal('show');
$tr = $(this).closest('tr');
var data = $tr.children("td").map(function(){
return $(this).text();
}).get();
console.log(data);
$("#delete_id").val(data[0]);
  });
});
</script>
      </body>
 </html>

 <!-- 3 jan bootstrap-->
