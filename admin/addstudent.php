<?php
include('../dbcon.php');
session_start();
error_reporting(0);

        $userprofile = $_SESSION['uid'];
       if(isset($userprofile ))
         {
           
      

         }
         else{

               // ../one folder back
         	// if session distroy execute redirecat login page
         	 //example your are copy url and logout .url paste in another page than redirect login.php   
         	header('location:../login.php');
         }
        

?>
<?php
    include('header.php');
    include('addtitle.php');

?>

 <!-- html form -->

    <form action="addstudent.php" method="post" enctype="multipart/form-data">

    <table border="1 solid" style="font-size: 30px; text-align: center; border-collapse: collapse;" align="center">
        <tr>
            <td>Rollno</td>
            <td><input type="number" name="rollno" placeholder="Please Enter Your Rollno" style="line-height: 30px; width: 95%" required="required"></td>
        </tr>
         <tr>
            <td>Name</td>
            <td><input type="text" name="username" placeholder="Please Enter Your Usernname" style="line-height: 30px; width: 95%" required="required"></td>
        </tr>
         <tr>
            <td>City</td>
            <td><input type="text" name="city"placeholder="Please Enter Your City" style="line-height: 30px; width: 95%" required="required"></td>
        </tr>
         <tr>
            <td>Parents Contact Number</td>
            <td><input type="number" name="mobile"placeholder="Please Enter Your Number" style="line-height: 30px; width: 95%" required="required"></td>
        </tr>
         <tr>
            <td>Standerd</td>
             <td><input type="text" name="class"placeholder="Please Enter Your Stander" style="line-height: 30px; width: 95%" required="required"></td>
        </tr>
         <tr>
            <td>Image</td>
            <td><input type="file" name="img"></td>
        </tr>
         <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
</form>
<?php

     if(isset($_POST['submit']))
        
      {

          $rollno = mysqli_escape_string($con, $_POST['rollno']);
          $userrname = mysqli_escape_string($con, $_POST['username']);
          //String Upper case
          $userlength = strtoupper($userrname);
          $city = mysqli_escape_string($con, $_POST['city']);
          //String Upper case
          $citylength = strtoupper($city);
          $mobile = mysqli_escape_string($con, $_POST['mobile']);
          $class = mysqli_escape_string($con, $_POST['class']);
          $filename=$_FILES["img"]["name"];
          $temp_name = $_FILES["img"]["tmp_name"];
          $size  = $_FILES["img"]["size"];
          $folder ="../img1/".$filename;
          if($size <=51200)
          {  
              move_uploaded_file($temp_name,$folder);
                $query = "INSERT INTO `student` VALUES (NULL,'$rollno','$userlength','$citylength','$mobile','$class','$folder')";
                $data = mysqli_query($con,$query);
                if ($data) 
               {
                echo "data isert into database";

               }
           else
            {
            echo "not insert";
            }
         }
         else
         {
         
                echo "<script language='javascript'>alert('file size less or equal 50kb')</script>";

         }
  
     }

?>


