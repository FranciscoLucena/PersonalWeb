<?php 

if(isset($_POST['submit'])){
    $username=$_POST['uname'];
    $pswd=$_POST['pswd'];
require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if(emptyInputLogin($username,$pswd) !==false){
    header("location: ../login.php?error=emptyfield");
    exit();
}
loginUser($conn,$username,$pswd);
}else{
    header("location: ../login.php");
    exit();
}