<!-- Header -->
<?php include "header.php"?>
 
  <div class="container">
    <h1 class="text-center" >Customer Testimonials</h1>
      <a href="includes/createe.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i> Create New Testimonial</a>
 
        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">Testimonial</th>
              <th  scope="col" colspan="3" class="text-center">Operations</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
  
          <?php
            $query="SELECT * FROM users";               // SQL query to fetch all table data
            $view_users= mysqli_query($conn,$query);    // sending the query to the database
 
            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $id = $row['id'];                
              $user = $row['username'];        
                    
              echo "<tr >";
          
              echo " <td > {$user}</td>";
              echo " <td class='text-center' > <a href='includes/updatee.php?edit&user_id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";
              echo " </tr> ";
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>
 
<!-- a BACK button to go to the index page -->
<div class="container text-center mt-5">
      <a href="homee.php" class="btn btn-warning mt-5"> Back </a>
    <div>
 
<!-- Footer -->
<?php include "footer.php" ?>