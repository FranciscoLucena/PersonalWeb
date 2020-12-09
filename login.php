<?php
include_once 'header.php';
?>
<div class="container" style="width:50%">
  <h2>Log in</h2>
  <form action="includes/login.inc.php" method="post" class="form-group">
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" >
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" >
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Log in</button>
  </form>
</div>
<?php
if(isset($_GET["error"])){
if($_GET["error"]=="emptyfield"){
  echo "<p class='error'>Please, fill all the fields.</p>";
}
if($_GET["error"]=="wrongUserorEmail"){
  echo "<p class='error'>Wrong Username or E-mail</p>";
}
if($_GET["error"]=="wrongPassword"){
  echo "<p class='error'>Wrong password.</p>";
}
}
?>
</body>
</html>
