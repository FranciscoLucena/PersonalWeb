<?php
if(isset($_POST["submit"])){
$fullname=$_POST["fname"];
$username=$_POST["uname"];
$email=$_POST["email"];
$pswd=$_POST["pswd"];
$pswdrepeat=$_POST["pswdrepeat"];

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if(emptyInputSignup($fullname,$username,$email,$pswd,$pswdrepeat) !==false){
    header("location: ../signup.php?error=emptyfield");
    exit();
}
if(invalidUid($username) !==false){
    header("location: ../signup.php?error=invaliduser");
    exit();
}
if(invalidEmail($email) !==false){
    header("location: ../signup.php?error=invalidemail");
    exit();
}
if(pwdMatch($pswd,$pswdrepeat) !==false){
    header("location: ../signup.php?error=passwordsdontmatch");
    exit();
}
if(UidExists($conn,$username,$email) !==false){
    header("location: ../signup.php?error=usernametaken");
    exit();
}
createUser($conn, $fullname, $email, $username, $pswd);


}else{
    header("location: ../signup.php");
}
