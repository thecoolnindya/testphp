<?php include('header.php'); ?>
<?php include('dbconection.php'); ?>

<?php
if(isset($_GET['id'])){
    $id = $_GET['id']; 

    $query = "SELECT * FROM `student_table` WHERE `id`='$id'";
    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query Failed: " . mysqli_error($connection));
    } else {
        $row = mysqli_fetch_assoc($result);
    }
}
?>

<?php
if(isset($_POST['update_students'])){
    $idnew = $_GET['id_new'];
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $email = $_POST['email'];

    $query = "UPDATE `student_table` SET `first_name`='$fname', `last_name`='$lname', `email`='$email' WHERE `id`='$idnew'";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query Failed: " . mysqli_error($connection));
    } else {
        header('location:studentlist.php?insert_msg= your data has been updated successfully');
    }
}
?>

<form action="updatestudent.php?id_new=<?php echo $id; ?>" method="post">
    <div class="form-group">
        <label for="f_name">First Name</label>
        <input type="text" name="f_name" class="form-control" value="<?php echo $row['first_name']; ?>">
    </div>
    <div class="form-group">
        <label for="l_name">Last Name</label>
        <input type="text" name="l_name" class="form-control" value="<?php echo $row['last_name']; ?>">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>">
    </div>
    <input type="submit" class="btn btn-success" name="update_students" value="UPDATE">
</form>

<?php include('footer.php'); ?>