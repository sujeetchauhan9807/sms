
<?php
    include('dbcon.php');
    // error_reporting(0);

?>

<!DOCTYPE html>
<html>
<head>

   <!--link css to sms.css  -->

     <link rel="stylesheet" type="text/css" href="css/sms.css">

	<title> Student Management System </title>
</head>
<body>
    
    <header>
    		<div>
    	                    <!-- kanpur logo -->
                          <div><img src="kanpur.jpg" class="logo"></div>

                         <div><h1> Student  Management  System</h1></div>

            </div>
    </header>
 
  <!-- menu bar and dropdown funtion -->

    <div id="menu">
       <ul>
         <li><a href="#" class="active"><span style="font-size: 25px">Home</span></a></li>
      
          <li><a href="#"><span style="font-size: 25px">Result</a>
           <ul>
              <li><a href="#">BCA</a></li>
              <li><a href="mca.php">MCA</a></li>
              <li><a href="b.tech.php">B.TECH</a></li>
              <li><a href="m.tech.php">M.TECH</a></li>
              <li><a href="bba.php">BBA</a></li>
              <li><a href="mba.php">MBA</a></li>
         </ul> 
       </li>
       <li><a href="#"><span style="font-size: 25px">Admission</span></a></li>
       <li><a href="#"><span style="font-size: 25px">About Us</span></a></li>
      <li><a href="#"><span style="font-size: 25px;">Contact</span></a></li> 
    </ul>
 </div>      

    <!-- Admin login and User Register -->
   
   
      <div id="admin">
              <div><a href="userregister.php" style="right; font-size: 20px; margin-left: 10px;">User Register</a>
              <a href="login.php" style="float: right; font-size: 20px; margin-right: 10px;">Admin login</a></div>
           
      </div>
 
   <marquee scrollamount="5" behavior="alternate" onmousemove="this.stop()" onmouseout="this.start()"><img src="new.gif"  style="height: 30px; width: 40px;" ><a href="bca.php" style="text-decoration: none;">BCA Exam Date</a></marquee>
             <form action="index.php" method="post">
              <div align="center">
                  <table border="1px solid" style="border-collapse: collapse; width: 30%;">
                       <tr><th colspan="2"><h2 style="font-family: arial">Student Information</h2></th></tr>
                 	   
                        <tr>
                        	<td align="center"><b>Choose Stander</b></td>
                          
                          <!-- drop down menu of stander -->

                        	<td>
                        		<select name="std" style="width: 50%">
                        			<option>select</option>
                        			<option value="1">1st</option>
                        			<option value="2">2st</option>
                        			<option value="3">3st</option>
                        			<option value="4">4st</option>
                        			<option value="5">5st</option>
                        			<option value="6">6st</option>
                              <option value="bca">BCA</option>
                              <option value="mca">MCA</option>
                              <option value="b.tech">B.TECH</option>
                               <option value="POLYTECHNIC">POLYTECHNIC</option>
                        		</select>
                        	</td>

                        </tr>
                        <tr>
                        	
                           <td align="center"><b>Rollno</b></td>
                           <td><input type="number" name="rollno" style="line-height: 30px; width: 95%"></td>

                        </tr>
                        <tr>
                        	
                          <td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>

                        </tr>
                 </table>
             
             </div>
          </form>
         
</body>
</html>

<?php

  
   if (isset($_POST['submit']))
    {
     
           $stander=mysqli_escape_string($con, $_POST['std']);
           $rollno=mysqli_escape_string($con, $_POST['rollno']);
      
         
             $query = "SELECT * FROM `student` WHERE standerd='$stander' and rollno='$rollno'";
             $data = mysqli_query($con,$query);
             $all = mysqli_num_rows($data);
             if ($all == 1)
              {
                  $result = mysqli_fetch_array($data);
                  ?>

                    <table border="1 solid" align="center" style="margin-top: 20px;"">
                      <tr>
                      <th colspan="3" style="font-family: arial;">Student Detail</th>
                     </tr>
                       <tr>
                        <td rowspan="6"><img src="img1/<?php echo $result['image']?>" style="max-width: 150px;"></td>
                      </tr>
                     <tr>
                      <th>Rollno</th>
                        
                          <td ><?php echo $result['rollno']?></td>
                        </tr>
                        <tr>
                        <th>Name</th>
                        
                          <td><?php echo $result['name']?></td>
                        </tr>
                        <tr>
                        <th>City</th>
                        
                          <td><?php echo $result['city']?></td>
                        </tr>
                        <tr>
                        <th>Parants Contanct No</th>
                        
                          <td><?php echo $result['pcont']?></td>
                        </tr>
                        <tr>
                        <th>Standerd</th>
                        
                          <td><?php echo $result['standerd']?></td>
                    </tr>
                      
                    </table>

                 <?php
              }
             else 
             {

              echo "<script> alert('No Record Found')</script>";
             }
            

    
  
      
    
      
   
   }

?>