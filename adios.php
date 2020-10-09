<?php
session_start();
//Check user permission
if ($_SESSION['authuser'] != 1){
    echo "Sorry, but you don't have permission to view this page!";
    exit();
}
?>
<html>
 <head>
  <title>Hello my name is Marc <?php echo $_GET['Hello'];?></title>
 </head>
 <body>
<?php
echo "Welcome to our site, ";
echo $_COOKIE["username"];
echo "! <br/>";

echo "Hello my name is Marc ";
echo $_GET['Hello'];

date_default_timezone_set("America/New York");
$leapyear = date("L");
if($leapyear == 1) {
echo "Hooray! It\"s a leap year!";
}
else{
echo "Aww, sorry, mate. No leap year this year.";
echo "! <br/>";
}
?>
 </body>
</html>     