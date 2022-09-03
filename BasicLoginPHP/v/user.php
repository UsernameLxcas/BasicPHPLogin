<?php 
session_start();
if ($_SESSION['username']==null) {
    header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You are user!</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="centerdv">
        <center><P>You are logged! (<?php echo $_SESSION['username']; ?>)</P>
        <br><form action="../c/Logout.php" method="POST">
        <input type="submit" value="Log out" name="Logout" id="btn2"/>
        </form>
    </center>
    </div>
</body>
</html>