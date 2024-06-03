<?php
include('dbconection.php'); // Make sure the filename is correct

if(isset($_POST["add_students"])) {
    $fname = $_POST['f_name'];
    $lname = $_POST['l_name'];
    $email = $_POST['email']; // Corrected variable name

    if($fname == "" || empty($fname)) {
        header('location:studentlist.php?message= you need to fill in the firstname!');
    } else {
        // Trim the values to avoid accidental spaces
        $fname = trim($fname);
        $lname = trim($lname);
        $email = trim($email);

        $query = "INSERT INTO `student_table` (`first_name`, `last_name`, `email`) VALUES ('$fname', '$lname', '$email')";
        $result = mysqli_query($connection, $query);

        if(!$result) {
            die("Query Failed: " . mysqli_error($connection)); // Corrected function name
        } else {
            header('location:studentlist.php?insert_msg= your data has been added successfully');
        }
    }
}
?>