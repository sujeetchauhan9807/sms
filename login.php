<?php
 
      // if sessoin not logout than session_satart()

session_start();
include('dbcon.php');
 error_reporting(0);
    if(isset($_SESSION['uid']))
    { 

     // if sessoin not logout immediately redirecte admin/admindash.php
             
        header('location:admin/admindash.php');

     }
   ?>

<!DOCTYPE html>
<html>
<head>
	<title> login</title>

<style type="text/css">
  
h2{
    
     background-color: #530602;
                color: #fff; 
                height: 130px;
                line-height: 130px;  
                text-align: center;
                font-size: 30px;
                margin-top: -10px;
                margin-left: -10px;
                margin-right: -10px;

  }

</style>


</head>
<body style="background-color: pink">

           <h2>Admin Login</h2>

          <h1 align="center"> Admin Login</h1>
        <form action="login.php" method="post">  
          <table border="1px solid" align="center" style="border-collapse:collapse; width: 30%; font-size: 150%">
          	<tr>
          		<td align="center">Username</td>
          		<td><input type="username" name="urname" style="line-height: 30px; width: 95%"></td>
          	</tr>
          	<tr>
          		<td align="center">Password</td>
          		<td><input type="Password" name="pass" style="line-height: 30px; width: 95%"></td>
          	</tr>
          	<tr>
          		
          		<td colspan="2" align="center"><input type="submit" name="login" value="Login" style=" font-size: 30px;"></td>
          	</tr>
          </table>
     </form>

</body>
</html>
<?php

//if isset with login

 if(isset($_POST['login']))

{


  //admin Query

       $userrname = mysqli_escape_string($con, $_POST['urname']);
       $Password = mysqli_escape_string($con, $_POST['pass']);

       if ($userrname!="" &&  $Password!="")
          {
           
                  $data = "SELECT * FROM `admin` WHERE username= '$userrname'AND password='$Password'";
                  $result = mysqli_query($con,$data);
                  $row = mysqli_num_rows($result);

                 if($row == 1)

                     {
         
                        // data fetch in admin table
    
                         $data1 = mysqli_fetch_array($result);

                           //store data in $data in assocative array out put = Array

                            $id = $data1['id'];

                              // convert array in numeric array out put $id = 1

                            $_SESSION['uid'] = $id;

                            header('location:admin/admindash.php');
   
                       }

                else

                    {

                         ?>
                              <script>alert('Please check uresname and Password')</script>
                          <?php
        
                   }


          }
     else
         {
          ?>
            
            <script>alert('All field required')</script>

          <?php
         }
       
    

 }

?>