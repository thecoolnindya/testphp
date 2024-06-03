<?php include("dbconection.php"); ?>
<?php session_start();?>

<?php
if(isset($_POST["login"])){
    $username = $_POST["uname"];
    $email = $_POST["email"];
}

$query = "SELECT * FROM `user_table` WHERE `username`='$username' AND `email`='$email'";
$result = mysqli_query($connection, $query);

if(!$result){
    die("Query Failed: " . mysqli_error($connection)); 
} else {
    $row = mysqli_num_rows($result);

    if($row ==1){
        $_SESSION['uname'] = $username;
        header('location:studentlist.php');
    }else{
        header('location:index.php?message=Sorry your username or email id is invalid');
    }

}
?>

