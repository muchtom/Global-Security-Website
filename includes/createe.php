<?php  include "../header.php" ?>
 
<?php 
  if(isset($_POST['create'])) 
    {
        $user = $_POST['user'];
         // SQL query to insert user data into the users table
        $query= "INSERT INTO users(username) VALUES('{$user}')";
        $add_user = mysqli_query($conn,$query);
     
        // displaying proper message for the user to see whether the query executed perfectly or not 
          if (!$add_user) {
              echo "something went wrong ". mysqli_error($conn);
          }
 
          else { echo "<script type='text/javascript'>alert('Testimonial  added successfully!')</script>";
              }         
    }
?>
 
<h1 class="text-center">Add Testimonial details </h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <!-- <label for="user" class="form-label">Username</label> -->
      <!-- <input type="text" name="user"  class="form-control">  -->
       <textarea class="form-control" rows = "4" cols = "40" name = "user">
            Enter Testimonial details here...
         </textarea>
      </div>
      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
      </div>
    </form> 
  </div>
 
   <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-5">
    <a href="../homee.php" class="btn btn-warning mt-5"> Back </a>
  <div>
 
<!-- Footer -->
<?php include "../footer.php" ?>