<?php include('header.php'); ?>
<?php include('dbconection.php'); ?>


<div class="box1">
<h2>All Students</h2>
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">ADD STUDENTS</button>
</div>
<table class="table table-hover table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>UPDATE</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM `student_table`";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            die("Query Failed: " . mysqli_error($connection));
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['first_name']; ?></td>
                    <td><?php echo $row['last_name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><a href="updatestudent.php?id=<?php echo $row['id'];?>" class="btn btn-success">Update</a></td>
                    <td><a href="deletestudent.php?id=<?php echo $row['id']?>" class="btn btn-danger" >Delete</a></td>


                </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>

<?php
if(isset($_GET['message'])){
    echo"<h6>".$_GET['message']."</h6>";
}

?>

<?php
if(isset($_GET['insert_msg'])){
    echo"<h6>".$_GET['insert_msg']."</h6>";
}

?>


<?php
if(isset($_GET['delete_msg'])){
    echo"<h6>".$_GET['delete_msg']."</h6>";
}

?>

<form action="addstudent.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD STUDENTS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
            <div class= "form-group">
                <lable for="f_name">First Name</lable>
                <input type="text" name="f_name" class="form-control">
                   
            </div>

            <div class= "form-group">
                <lable for="l_name">Last Name</lable>
                <input type="text" name="l_name" class="form-control">
                   
            </div>

            <div class= "form-group">
                <lable for="email">Email</lable>
                <input type="text" name="email" class="form-control">
                   
            </div>
       

      </div>
      <div class="modal-footer">
      <input type="submit" class="btn btn-success" name="add_students" value="ADD">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
</form>
<?php include('footer.php'); ?>


