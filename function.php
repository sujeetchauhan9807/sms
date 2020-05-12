<?php

    include('dbcon.php');
    function showdetails($stander,$rollno)
    {
             $query = "SELECT * FROM student standerd='$stander' and rollno='$rollno'";
             $data = mysqli_query($con,$query);
             $all = mysqli_num_rows($data);
             if ($all==1)
              {
             	$result = mysqli_fetch_assoc($data);
             	?>

                    <table>
                    	<th>Student Detail</th>
                    	<tr>
                    		<td><img src="img1/<?php echo $result['image']?>"></td>
                    	</tr>
                    	<th>Rollno</th>
                    		<tr>
                    			<td><?php echo $result['rollno']?></td>
                    		</tr>
                    		<th>Name</th>
                    		<tr>
                    			<td><?php echo $result['name']?></td>
                    		</tr>
                    		<th>City</th>
                    		<tr>
                    			<td><?php echo $result['city']?></td>
                    		</tr>
                    		<th>Parants Contanct No</th>
                    		<tr>
                    			<td><?php echo $result['pcont']?></td>
                    		</tr>
                    		<th>Standerd</th>
                    		<tr>
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