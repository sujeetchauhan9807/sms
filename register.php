<?php
if(isset($_POST['register']))

{
   if ($userrname!="" && $Password!="") 
   {

       $userrname = mysqli_escape_string($con, $_POST['urname']);
       $Password = mysqli_escape_string($con, $_POST['pass']);

   }

            $query= "INSERT INTO admin VALUES(NULL,'$userrname','$Password')";
     
            $data=mysqli_query($con,$query);

    if($data)
    {
      

	    echo "data insert into datdabase";
    }
   // else
   // {
	  //  echo "not insert database";
   // }
   else
   {

    echo "<font color = red><b>All Field Required</b>";

   }
}  
     
   

?>
