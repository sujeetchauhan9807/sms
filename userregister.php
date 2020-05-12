
<?php 
include('dbcon.php');
error_reporting(0);

 ?>


<!DOCTYPE html>
<html>
<head>
	<title> User Register </title>

 <style type="text/css">
 	
 h2{

     background-color: #530602;
                color: #fff; 
                height: 130px;
                line-height: 130px;  
                text-align: center;
                font-size: 30px;
                margin-top: -0px;
                margin-left: -10px;
                margin-right: -10px;
                

  }

  span{

          color:  #62C75B;; 
                height: 30px;
                line-height: 30px;  
                font-size: 30px;
             /*   margin-left:30%;*/
              /*  text-align: center;
                position: absolute;*/
              


      }

 </style>


</head>
<body style="background-color: pink">

	<div>
		
           <h2>User Register Page</h2>
	    	
	</div>

 <form action="userregister.php"method="post"enctype="multipart/form-data">
        
        <table  border="1px solid" style="border-collapse: collapse; width: 30%" align="center" class="table" >
        	
                <th colspan="2"><b style="font-size: 20px">User Register</b></th>
                <tr>
                	<td align="center"><b style="font-size: 20px">User Name</b></td>
                	<td><input type="text" name="urname" style="line-height: 30px; width: 95%"></td>
                </tr>
                <tr>
                	<td align="center"><b style="font-size: 20px">User Password</b></td>
                	<td><input type="Password" name="pass" style="line-height: 30px; width: 95%"></td>
                </tr>
                <tr>
                	<td colspan="2" align="center"><input type="submit" name="register" value="User Register" style="font-size: 20px"></td>
                </tr>


        </table> 	

 </form>


</body>
</html>
<?php

if(isset($_POST['register']))

{
           $userrname = mysqli_escape_string($con, $_POST['urname']);
           $Password = mysqli_escape_string($con, $_POST['pass']);

       

    //check value same username data in admin tabale

            $check = "SELECT * FROM `admin` WHERE username = '$userrname'";
            $query = mysqli_query($con,$check);
            $result = mysqli_num_rows( $query);

    if ($result == 1)       

       {

           ?>
              <script>alert('User name all ready exit')</script>
              
           <?php

        }

    else

                   {

                         // check text field not empty value


                          if ( $userrname!="" && $Password!="")

                               {
                                   // password check minimum 8 charecter
                               	    if (strlen($Password)<8) 
                               	        {
                               	           ?>
                                                    <script>alert('User Password minimum 8 charecter')</script> 
                                            <?php
                               	        }
                               	    else
                               	        {
                                            $query= "INSERT INTO admin VALUES(NULL,'$userrname','$Password')";
     
                                             $data=mysqli_query($con,$query);

                                  if($data)

                                      {
                                         ?>
                                         <table align="center" border="1 solid" style="margin-top: 20px">

                                         	<tr><th colspan="2">Hi&nbsp<?php echo " <font color=blue> $userrname" ?>&nbspYour Are  Successfully Register</th></tr>
                                         	<tr>
                                         		<th>Your Usename</th>
                                         		<td><?php echo $userrname?></td>
                                         	</tr>
                                         	<tr>
                                         		<th>Your Password</th>
                                         		<td><?php echo $Password ?></td>
                                         	</tr>
                                         	<tr>   
                                            <th colspan="2"><a href="login.php" style="text-decoration: none;" text-align=center>click here to login page</a></th>
                                        </tr>
                                          </table>
                                          <?php
                                       }
     
   

                                    else

                                          {

                                             echo "not insert database";

                                           }

                               	        }   
                                 
                                                
                                }    

                                
        
                          else

                            {

                                   echo "<span><font color = red>All Field Required*</span>";
                             }
                    }  

        



}  
     
   

?>

