<?php
// Starting Session
$error=''; // Variable To Store Error Message


// Define $username and $password
$user_login= $_SESSION['user_login'];
$password= $_SESSION['password'];

$connection = mysqli_connect("localhost", "root", "", "meublariobase");


// SQL query to fetch information of registerd users and finds user match.
$sql="select * from user where pwd='$password' AND loginU='$user_login'";
$query = mysqli_query($connection,$sql);
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$res=mysqli_fetch_assoc($query);
$_SESSION['user_nom']=$res['nom'];// Initializing Session by storing user first name and last name
//$_SESSION['user_prénom']=$res['prénom']; 
$_SESSION['admin']=$res['adm'];
//header("location: index.php"); // Redirecting To Other Page
} else {
echo '<script>
        alert("login ou mot de passe incorrecte");
      </script>';
}
//mysqli_close($connection); // Closing Connection

?>