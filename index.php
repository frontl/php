<?php 
setcookie("user", "Alex Porter", time()+3600);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<?php
// Print a cookie
// echo $_COOKIE["user"];

// A way to view all cookies
// print_r($_COOKIE);
?>
  <?php
if (isset($_COOKIE["user"]))
  echo "Welcome " . $_COOKIE["user"] . "!<br />";
else
  echo "Welcome guest!<br />";
?>
</body>
</html>
<?php 
// set the expiration date to one hour ago
setcookie("user", "", time()-3600);
?>

