<?php 
include("connection.php");
?>


<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="css/index.css">
</head>
<body>

<div >

<form action="<?php $_SERVER['PHP_SELF']; ?>" method=POST>
    
----------------------------------------------
<br>
Username: <input type="text" name="user">
<br>
Password: <input type="password" name="pass">
<br>
<input type="submit" name="logbutton" value="Login"> 
<input type="submit" name="logbutton" value="Add"> 
<br>
----------------------------------------------

</form>

<?php
include("authenticate.php");

?>


</div>



</body>
</html>
