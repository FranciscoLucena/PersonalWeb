<?php
include_once 'header.php';
?>
<div class="container" style="width:50%">
  <h2 class="centered">Sign up</h2>
  <form action="includes/signup.inc.php" method="post" class="form-group">
  <div class="form-group">
      <label for="fname">Full Name:</label>
      <input type="text" class="form-control" id="fname" placeholder="Full name here" name="fname" required>
    </div>
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
      <div class="invalid-feedback">Please fill out this field with a valid Email.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
    </div>
    <div class="form-group">
      <label for="pwdrepeat">Repeat the password:</label>
      <input type="password" class="form-control" id="pwdrepeat" placeholder="Repeat password" name="pswdrepeat" required>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> Aceptas casarte conmigo?
      </label>
    </div>
    <div class="submit">
    <button type="submit" name="submit" class="btn btn-primary" >Sign up</button>
    </div>
  </form>
</div>

<?php
if(isset($_GET["error"])){
if($_GET["error"]=="emptyfield"){
  echo "<p class='error'>Please, fill all the fields.</p>";
}
if($_GET["error"]=="invaliduser"){
  echo "<p class='error'>Please, fill a correct username.</p>";
}
if($_GET["error"]=="invalidemail"){
  echo "<p class='error'>Please, fill a correct email (asda@asda.com).</p>";
}
if($_GET["error"]=="passwordsdontmatch"){
  echo "<p class='error'>Passwords doesn't match.</p>";
}
if($_GET["error"]=="usernametaken"){
  echo "<p class='error'>User name its already in use.</p>";
}
if($_GET["error"]=="none"){
  echo "<p class='error'>You're succesfully signed up.</p>";
}
}

?>

<?php
?>
</body>
</html>
