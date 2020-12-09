
<?php 

function emptyInputSignup($fullname,$username,$email,$pswd,$pswdrepeat){
$result;
if(empty($fullname)||empty($username)||empty($email)||empty($pswd)||empty($pswdrepeat)){
$result=true;
}else{
$result=false;
}
return $result;
}
function invalidUid($username){
$result;
if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
$result=true;
}else{
$result=false;
}
return $result;
}
function invalidEmail($email){
$result;
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
$result=true;
}else{
$result=false;
}
return $result;
}
function pwdMatch($pswd,$pswdrepeat){
$result;
if($pswd!==$pswdrepeat){
$result=true;
}else{
$result=false;
}
return $result;
}
function UidExists($conn,$username,$email){
$sql="SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
header("location: ../signup.php?error=stmtfailed");
exit();
}

mysqli_stmt_bind_param($stmt,"ss",$username,$email);
mysqli_stmt_execute($stmt);

$resultData = mysqli_stmt_get_result($stmt);

if($row=mysqli_fetch_assoc($resultData)){
return $row;
}else{
$result=false;
return $result;
}
mysqli_stmt_close($stmt);
            }
function createUser($conn, $fullname, $email, $username, $pswd){
$sql="INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?,?,?,?);";
$stmt=mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt,$sql)){
     header("location: ../signup.php?error=stmtfailed");
     exit();
}
 
$hashedPwd = password_hash($pswd, PASSWORD_DEFAULT);

 mysqli_stmt_bind_param($stmt,"ssss",$fullname,$email,$username,$hashedPwd);
 mysqli_stmt_execute($stmt);
 mysqli_stmt_close($stmt);
 header("location: ../signup.php?error=none");
 exit();
}
function emptyInputLogin($username,$pswd){
     $result;
     if(empty($username)||empty($pswd)){
     $result=true;
     }else{
     $result=false;
     }
     return $result;
     }
function loginUser($conn,$username,$pswd){
$UidExists=UidExists($conn,$username,$username);
if($UidExists === false){
     header("location: ../login.php?error=wrongUserorEmail");
     exit();
}
$hashedPwd = $UidExists["usersPwd"];
$check=password_verify($pswd,$hashedPwd);
if($check===false){
     header("location: ../login.php?error=wrongPassword");
     exit();
}else if($check===true){
session_start();
$_SESSION["userid"]=$UidExists["usersId"];
$_SESSION["useruid"]=$UidExists["usersUid"];
header("location: ../index.php");
exit();
}

}