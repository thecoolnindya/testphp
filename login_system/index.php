<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" type="text/css" href="includes/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="includes/bootstrap/css/style.css">
</head>
<body>
    <h1>LOGIN</h1>

    <?php
if(isset($_GET['message'])){
    echo"<h4>".$_GET['message']."</h4>";
}

?>
    <div class="container">
        <form class="form" action="login_process.php" method="post">
            <div class="form-group">
                <label for="uname">UserName</label>
                <input type="text" name="uname" class="form-control" id="uname">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <input type="submit" name="login" value="Login" class="btn btn-success">
            </div>
        </form>
    </div>
</body>
</html>
