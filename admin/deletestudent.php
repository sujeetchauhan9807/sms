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
   <table align="center" style="margin-top: 20px">
   <form action="deletestudent.php" method="post">
   
      <tr><th>Enter Name</th>
       <td><input type="text" name="name" placeholder="Enter Name" required="required"></td>
   </tr>
    <tr><th> Enter Rollno</th>
       <td><input type="number" name="rollno" placeholder="Enter Rollno" required="required"></td>
   </tr>
      <td colspan="2" align="center"> <input type="submit" name="submit" value="submit"></td>
   </form> 


    


  <?php

    if (isset($_POST['submit']))
     {
              $rollno = mysqli_escape_string($con, $_POST['rollno']);
              $name =  mysqli_escape_string($con, $_POST['name']);
              $query="SELECT * FROM STUDENT  WHERE rollno='$rollno' AND name LIKE '%$name%'";
              $data=mysqli_query($con, $query);
              $result = mysqli_num_rows($data);
       
       if ($result<1)
           {
             ?>
             <table align="center">
                <tr>
                   <td> <?php echo "<font color = 'red'; size = '10'>recored not found!!!";?></td>
               </tr>
             </table>
                 <?php
              }
              else
              {
                       
                $count=0;
                while ($all=mysqli_fetch_assoc($data))
                 {
                     $count++;
                       ?>
                          <table border="1 solid" style="border-collapse: collapse; margin-top: 10px;" align="center" width="80%">
                         <tr style=" background-color: #000; color: #fff;">
                            <th style="font-size: 20px;">No</th>
                            <th style="font-size: 20px;">Image</th>
                            <th style="font-size: 20px;">Name</th>
                            <th style="font-size: 20px;">Rollno</th> 
                           <th style="font-size: 20px;">Edit</th>  

                         </tr>
                      <tr align="center">
                             <td style="font-size: 20px;"><?php echo $count?></td>
                             <td><img src="../img1/<?php echo $all['image'];?>" style = "max-width:150px;"/></td>
                             <td style="font-size: 20px;"><?php echo $all['name']?></td>
                             <td style="font-size: 20px;"><?php echo $all['rollno']?></td> 
                              <td style="font-size: 20px;"><a href="deleteform.php?sid=<?php echo $all['id']?> onclick = 'return checkdelete()'">Delete Student</a></td>  

                      </tr>

                   </table>
                   <?php
                 }

              }
     }      
 ?>   
 <script type="text/javascript">
  
  function checkdelete() {
    return confirm('Are you sure delete data');
    
  }
</script>