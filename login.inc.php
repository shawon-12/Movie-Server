<?php 

$host="localhost";
$user="root";
$password="";
$db="demo";

$conn = mysqli_connect($host,$user,$password,$db);

if(isset($_POST['submit'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql = "SELECT * FROM loginform WHERE user='$uname' AND Pass='$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    
    if($count == 1){
        echo "Congats! you have succesfully Logged in";
        exit();
    }
    else{
        echo "You Have Entered Incorrect Password or UserName";
        exit();
    }
        
}

?>