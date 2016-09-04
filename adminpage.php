<?php 
session_start();
if($_SESSION["login"]){ ?>
<!DOCTYPE html>
<html>
    <head></head>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <style>
        body{width:900px; margin:0 auto;}
    </style>
    <body>
        <h1 class="text-center">Admin Panel</h1>
         
        <a class="btn btn-default" href="list.php">Edit News</a>
        
        <form action="index.html" method="post">
            <input type="submit" value="Logout" class="btn btn-danger" name="logout">
        </form>
    </body>
</html>
<?php
}
else{ header("Location:admin.php");}
?>
