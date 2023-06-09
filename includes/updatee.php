<!-- Header -->
<?php include "../header.php"?>
 
<?php
   // checking if the variable is set or not and if set adding the set data value to variable userid
   if(isset($_GET['user_id']))
    {
      $userid = $_GET['user_id']; 
    }
      // SQL query to select all the data from the table where id = $userid
      $query="SELECT * FROM users WHERE id = $userid ";
      $view_users= mysqli_query($conn,$query);
 
      while($row = mysqli_fetch_assoc($view_users))
        {
          $id = $row['id'];
          $user = $row['username'];
        }
  
    //Processing form data when form is submitted
    if(isset($_POST['update'])) 
    {
      $user = $_POST['user']; 
      // SQL query to update the data in user table where the id = $userid 
      $query = "UPDATE users SET username = '{$user}'  WHERE id = $userid";
      $update_user = mysqli_query($conn, $query);
      echo "<script type='text/javascript'>alert('User data updated successfully!')</script>";
    }             
?>
 
<h1 class="text-center">Update Testimonial  Details</h1>
  <div class="container ">
    <form action="" method="post">
      <div class="form-group">
        <label for="user" >Testimonial</label>
        <input type="text" name="user" class="form-control" value="<?php echo $user  ?>">
      </div>
 
      <div class="form-group">
         <input type="submit"  name="update" class="btn btn-primary mt-2" value="update">
      </div>
    </form>    
  </div>
 
  <!-- a BACK button to go to the home page -->
  <div class="container text-center mt-5">
    <a href="../homee.php" class="btn btn-warning mt-5"> Back </a>
  <div>
 
<!-- Footer -->
<?php include "../footer.php" ?>