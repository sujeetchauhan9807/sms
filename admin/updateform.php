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
    include('addtitle.php');bhat02

    $sid = mysqli_escape_string($con,$_GET['sid']);
    $query = "SELECT * FROM `student` WHERE id='$sid'";
    $data = mysqli_query($con,$query);
    $result = mysqli_fetch_assoc($data);
    ?>



    

 <!-- html form -->

    <form action="updatedata.php" method="post" enctype="multipart/form-data">

    <table border="1 solid" style="font-size: 30px; text-align: center; border-collapse: collapse;" align="center">
        <tr>
            <td>Rollno</td>
            <td><input type="number" name="rollno" style="line-height: 30px; width: 95%" value="<?php echo  $result['rollno'];?>" ></td>
            <th> <td><img src="../img1/<?php echo $result['image'];?>" style = "max-width:150px;"/></td></th>
        </tr>
         <tr>
            <td>Name</td>
            <td><input type="text" name="username"  style="line-height: 30px; width: 95%" value="<?php echo  $result['name'];?>"></td>
        </tr>
         <tr>
            <td>City</td>
            <td><input type="text" name="city" style="line-height: 30px; width: 95%" value="<?php echo  $result['city'];?>"></td>
        </tr>
         <tr>
            <td>Parents Contact Number</td>
            <td><input type="number" name="mobile" style="line-height: 30px; width: 95%" value="<?php echo  $result['pcont'];?>"></td>
        </tr>
         <tr>
            <td>Standerd</td>
             <td><input type="text" name="class" style="line-height: 30px; width: 95%" value="<?php echo  $result['standerd'];?>"></td>
        </tr>
         <tr>
            <td>Image</td>
            <td><input type="file" name="img"></td>

        </tr>
          
         <tr>
            <td colspan="2" align="center"><input type="hidden" name="sid" value="<?php echo $result['id']?>"><input type="submit" name="submit" value="submit"></td>
        </tr>
    </table>
    
</form>

