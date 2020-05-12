<?php

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
  
    //include file in header.php
   //kyo ki bar bar code n likhana pade header se change kare to har jagah change ho jana chahiye

include('header.php');


?>
  <div class="admindashboard">
       <h4><a href="../logout.php" style="float: right;margin-right: 30px; ">Logout</a></h4>
        <h1> Welcome to Admin Dashboard </h1> 
  </div>
  <div class="dash">
  	
       <table border="1 solid" style="border-collapse: collapse; width: 50%; text-align: center;" align="center">
       	 <tr>
       	 	<td>1.</td><td><a href="addstudent.php">Insert Student Detail</a></td>
       	 </tr>
       	  <tr>
       	 	<td>2.</td><td><a href="deletestudent.php">Delete Student Detail</a></td>
       	 </tr>
       	  <tr>
       	 	<td>3.</td><td><a href="updatestudent.php">Update Student Detail</a></td>
       	 </tr>
       </table>

  </div>

</body>
</html>



