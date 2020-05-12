


<?php

  

    include('../dbcon.php');
 

  

          $rollno = mysqli_escape_string($con, $_POST['rollno']);
          $userrname = mysqli_escape_string($con, $_POST['username']);
          $city = mysqli_escape_string($con, $_POST['city']);
          $mobile = mysqli_escape_string($con, $_POST['mobile']);
          $class = mysqli_escape_string($con, $_POST['class']);
          $id = mysqli_escape_string($con, $_POST['sid']);
          $filename=$_FILES["img"]["name"];
          $temp_name = $_FILES["img"]["tmp_name"];
          $size  = $_FILES["img"]["size"];
          $folder ="../img1/".$filename;
          if($size <=51200)
          {  
              move_uploaded_file($temp_name,$folder);
                $query = "UPDATE `student` SET `rollno`='$rollno',`name`='$userrname',`city`='$city',`pcont`='$mobile',`standerd`='$class',`image`='$folder' WHERE `id`='$id'";
                $data = mysqli_query($con,$query);
                if ($data) 
               {
                  ?>
                  <script>
                  alert('Data Update Successfully');
                  window.open('updateform.php?sid=<?php echo $id ?>','_self');

              </script>
               <?php
               }
           else
            {
            echo "not insert";
            }
         }
         else
         {
         
                echo "<script language='javascript'>alert('file size less 50kb')</script>";

         }
  
     


?>