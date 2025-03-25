<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_WARNING);
session_start();
if (isset($_SESSION['loggedin']))
   header("Location: submit.php");


/* User details are read and placed into an associative array;   */

if (($handle = fopen("users.csv", "r")) !== FALSE) {
   while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
      $users[$data[0]] = array("password" => $data[1], "admin" => $data[2]);
   }
   fclose($handle);
}



/* Process login data */
if (!isset($_POST['username']) || !isset($_POST['password'])) {
   header("Location: session.php");
}

$u = $_POST['username'];
$p = $_POST['password'];


/* Check it against our 'database' Only administrators are permitted to login into secret page so they must have a administrator value of 1 */
if (isset($users[$u]) and $users[$u]['password'] == $p and $users[$u]['admin'] == 1) {
   $_SESSION['loggedin'] = TRUE;
   $_SESSION['username'] = $u;
   header("Location: submit.php");
}  else {
   header("Location: session.php");
}
?>