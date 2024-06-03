<?php include('dbconection.php'); ?>


 <?php
 if(isset($_GET['id'])){
    $id=$_GET['id'];

    $query = "DELETE FROM `student_table` WHERE `id`='$id'";
    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("Query Failed: " . mysqli_error($connection)); // Corrected function name
    } else {
        header('location:studentlist.php?delete_msg= your data has been Deleted successfully');
    }
 }
 ?>
