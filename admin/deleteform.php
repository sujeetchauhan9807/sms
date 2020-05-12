


<?php

  

    include('../dbcon.php');
 

  

          $id = mysqli_escape_string($con, $_GET['sid']);
      
          {  
                $query = "DELETE FROM student WHERE `id`='$id'";
                $data = mysqli_query($con,$query);
                if ($data) 
               {
                  ?>
                  <script>
                  alert('Data delete Successfully');
                  window.open('deletestudent.php','_self');

              </script>
               <?php
               }
           else
            {
            echo "not delete";
            }
         }
    
?>