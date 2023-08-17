<?php
$aname=$_POST["nm"];
$gen=$_POST["r1"];
$contact=$_POST["pno"];
$email=$_POST["email"];
$username=$_POST["uname"];
$pass=$_POST["pass"];


$con=mysqli_connect("localhost","root","1234","sports");
$check=mysqli_query($con," select username from registration where username='$username'");
$res=mysqli_num_rows($check);
if($res>0)
     { echo "<script>alert('Username already exists , choose a different one.')
              window.location.href='register.php' </script>" ;
  }
else
  {
$r=mysqli_query($con,"insert into registration(Name,gender,phone,email,username,password)
              values('$aname','$gen','$contact','$email','$username','$pass')");
     
if($r)
{ echo "<script>alert('Your Registeration is done .')
              window.location.href='login.php' </script>" ;
  }
else
echo mysqli_error($con);}

?>
