<?php
session_start();


$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');


$name=$_POST['user'];
$password=$_POST['password'];

$s="select * from usertable where name= '$name'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1)
{
    echo "username already taken";
}
else
{
    $reg="insert into usertable(name,password) values('$name','$password')";
    mysqli_query($con, $reg);
    echo "<script>alert('Registration Successfull')</script>";
}
    

?>
<html>
    <h1>
    <a href="login.php">login page </a><br>
    <a href="register.php">Sign up<a/>
        

</h1>
</html>
