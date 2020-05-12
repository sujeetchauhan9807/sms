
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
    <form action="bca.php" method="post">
        <table border="1 solid" align="center" style="margin-top: 30px; width: 30%">
            <tr><th colspan="2" style="font-size: 30px">Exam Date BCA</th></tr>
            <tr>
                <td align="center" style="font-size: 30px">Select</td>

                <td><select name="sem" style="width: 80%; font-size: 30px;">
                    <option>select</option>
                    <option value="sem1">semester1</option>
                    <option value="sem2">semester2</option>
                    <option value="sem3">semester3</option>
                    <option value="sem4">semester4</option>
                    <option value="sem5">semester5</option>
                    <option value="sem6">semester6</option>  
                </select></td>
            </tr>
            <tr>
                            
                          <td colspan="2" align="center"><input type="submit" name="submit" value="submit"  style="font-size: 30px"></td>

                        </tr>
        </table>
    </form>
 </body>
 </html>




 <?php


     if (isset($_POST['submit']))
      {
       
         $sem=mysqli_escape_string($con, $_POST['sem']); 


     switch ($sem)
      {
         case 'sem1':
            ?>

             <table align="center" border="1 solid" style="margin-top: 30px">
                 <tr><th colspan="2" style="font-size: 30px">First Semester Exam Data</th></tr>
                 <tr>
                     <th>02/01/2019</th>
                     <td>COMPUTER FUNDAMENTAL & OFFICE AUTOMATION </td>
                 </tr>
                  <tr>
                     <th>04/01/2019</th>
                     <td>PROGRAMMING PRINCIPLE & ALIGORITHM </td>
                 </tr>
                  <tr>
                     <th>06/01/2019</th>
                     <td>PRINCIPLE OF MANAGEMENT </td>
                 </tr>
                  <tr>
                     <th>08/01/2019</th>
                     <td>BUSINESS COMMUNICATION </td>
                 </tr>
                  <tr>
                     <th>10/01/2019</th>
                     <td>MATHEMATICS-I</td>
                 </tr>
                  <tr>
                     <th>12/01/2019</th>
                     <td>COMPUTER LABORATORY </td>
                 </tr>
             </table>

            <?php
             break;
              case 'sem2':
                ?>

                
             <table align="center" border="1 solid" style="margin-top: 30px">
                 <tr><th colspan="2" style="font-size: 30px">Second Semester Exam Data</th></tr>
                 <tr>
                     <th>02/06/2019</th>
                     <td>C PROGRAMMING </td>
                 </tr>
                  <tr>
                     <th>04/06/2019</th>
                     <td>DIGITAL ELECTRONICS & COMPUTER ORGANIZATION </td>
                 </tr>
                  <tr>
                     <th>06/06/2019</th>
                     <td>ORGNIZATIONAL BEHAVIOUR </td>
                 </tr>
                  <tr>
                     <th>08/06/2019</th>
                     <td>FINANCIAL ACCOUNTING & MANAGEMANT </td>
                 </tr>
                  <tr>
                     <th>10/06/2019</th>
                     <td>MATHEMATICS-II</td>
                 </tr>
                  <tr>
                     <th>12/06/2019</th>
                     <td>COMPUTER LABORATORY OF C PROGROMMING </td>
                 </tr>
             </table>

                <?php
             break;
              case 'sem3':
                     ?>
             <table align="center" border="1 solid" style="margin-top: 30px">
                 <tr><th colspan="2" style="font-size: 30px">Third Semester Exam Data</th></tr>
                 <tr>
                     <th>02/01/2019</th>
                     <td>OBJECT ORIENTED PROGRAMMING USING C++ </td>
                 </tr>
                  <tr>
                     <th>04/01/2019</th>
                     <td>DATA STRUCTURE USING C AND C++ </td>
                 </tr>
                  <tr>
                     <th>06/01/2019</th>
                     <td>COMPUTER ARCHITECTURE AND ASSEMBLY LANGUAGE</td>
                 </tr>
                  <tr>
                     <th>08/01/2019</th>
                     <td>BUSINESS ECONOMICS </td>
                 </tr>
                  <tr>
                     <th>10/01/2019</th>
                     <td>ELEMENTS OF STASTISCS</td>
                 </tr>
                  <tr>
                     <th>12/01/2019</th>
                     <td>COMPUTER LABORATORY WORKS OF OOPS </td>
                 </tr>
             </table>
                <?php
             break;
              case 'sem4':
              ?>

                
             <table align="center" border="1 solid" style="margin-top: 30px">
                 <tr><th colspan="2" style="font-size: 30px">Fouth Semester Exam Data</th></tr>
                 <tr>
                     <th>02/06/2019</th>
                     <td>COMPUTER GHRAPHICS AND MULTIMEDIA APPLICATION </td>
                 </tr>
                  <tr>
                     <th>04/06/2019</th>
                     <td>OPERATING SYSTEM </td>
                 </tr>
                  <tr>
                     <th>06/06/2019</th>
                     <td>SOFTWARE ENGINEERING </td>
                 </tr>
                  <tr>
                     <th>08/06/2019</th>
                     <td>OPTIMAZATION TECHNIQUES </td>
                 </tr>
                  <tr>
                     <th>10/06/2019</th>
                     <td>MATHEMATICS-III</td>
                 </tr>
                  <tr>
                     <th>12/06/2019</th>
                     <td>COMPUTER LABORATORY OF COMPUTER GHRAPHICS </td>
                 </tr>
             </table>

                <?php
             break;
              case 'sem5':
                                         ?>
             <table align="center" border="1 solid" style="margin-top: 30px">
                 <tr><th colspan="2" style="font-size: 30px">Fifth Semester Exam Data</th></tr>
                 <tr>
                     <th>02/01/2019</th>
                     <td>INTRODUTATION OF DBMS</td>
                 </tr>
                  <tr>
                     <th>04/01/2019</th>
                     <td>JAVA PROGRAMMING AND DYNMIC WEBPAGE DESIGN </td>
                 </tr>
                  <tr>
                     <th>06/01/2019</th>
                     <td>COMPUTER NETWORK</td>
                 </tr>
                  <tr>
                     <th>08/01/2019</th>
                     <td>NUMERICAL METHODS </td>
                 </tr>
                  <tr>
                     <th>10/01/2019</th>
                     <td>MINOR PROJECT</td>
                 </tr>
                  <tr>
                     <th>12/01/2019</th>
                     <td>COMPUTER LABORATORY WORK ON JAVA PROGRAMMING AND WEBDESIGN </td>
                 </tr>
             </table>
                <?php
             break;
              case 'sem6':
               ?>

                
             <table align="center" border="1 solid" style="margin-top: 30px">
                 <tr><th colspan="2" style="font-size: 30px">Six Semester Exam Data</th></tr>
                 <tr>
                     <th>02/06/2019</th>
                     <td>COMPUTER NETWORK SECURITY </td>
                 </tr>
                  <tr>
                     <th>04/06/2019</th>
                     <td>INFORMATION SYSTEM ANNALYSIS DESIGN AND IMPLEMETATION  </td>
                 </tr>
                  <tr>
                     <th>06/06/2019</th>
                     <td>E-COMMERCE </td>
                 </tr>
                  <tr>
                     <th>08/06/2019</th>
                     <td>KNOWLEDGE MANAGEMENT </td>
                 </tr>
                  <tr>
                     <th>10/06/2019</th>
                     <td>MAJOR PROJECT</td>
                 </tr>
                  <tr>
                     <th>12/06/2019</th>
                     <td>SEMINAR BASED ON MAJOR PROJECT </td>
                 </tr>
                
             </table>
              
                   
                <?php
             break;
         
         default:
         ?>
         <table align="center">
             <tr><td style="font-size: 30px"><?php echo "<font color= red> No Exam"?></td></tr>
         </table>
         <?php
             break;
       }
       ?>
       <table align="center">
                 <tr>
                     <th colspan="2"><a href="index.php" style="text-decoration: none;"> Click Go To Home Page</a></th>
                 </tr>
       </table>
       <?php
   

     }


 ?>
                  
                  
                   