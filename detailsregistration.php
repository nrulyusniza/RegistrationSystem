<?php  
 $connect = mysqli_connect("localhost", "root", "", "registrationsystem");  
 $sql = "SELECT admin_name, course_name, student_name
 FROM course c JOIN registration r 
 ON c.course_id = r.course_id
 join admin a
 on a.admin_id = r.admin_id 
 join student s
 on s.student_id= r.student_id" ;  

 $result = mysqli_query($connect, $sql); 
 $counter = 1; 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Fetch Data from Two or more Table Join using PHP and MySql</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Registration detail</h3><br />                 
                <div class="table-responsive">  
                     <table class="table table-striped">  
                          <tr>  
                               <th>Course Id</th>
                               <th>Course Name</th>
                               <th>Admin Name</th>
                               <th>Student Name</th>  

                          </tr>  
                          <?php  
                          if(mysqli_num_rows($result) > 0)  
                          {  
                               while($row = mysqli_fetch_array($result))  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $counter++; ?></td>
                               <td><?php echo $row["course_name"]; ?></td> 
                               <td><?php echo $row["admin_name"]; ?></td>
                               <td><?php echo $row["student_name"]; ?></td>  
                          </tr>  
                          <?php  
                               }  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>