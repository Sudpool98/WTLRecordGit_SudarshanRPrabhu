<!DOCTYPE html>
<html>
<body>
 
<?php
$uid = $_POST['userid'];
$pw = $_POST['password'];
 
if($uid == 'Sud' and $pw == 'spwd')
{    
    session_start();
    $_SESSION['sid']=session_id();
    echo "Logged in successfully";
}
else
{
    echo "Invalid userid and password";
}
?>
 
</body>
</html>