<?php
session_start();
setcookie("username","Marc69",time()+60);
$_SESSION['username'] = "Marc69";
$_SESSION['authuser'] = 1;
$nombre_usuario = $GET['usuario'] ?? 'hola';
$nombre_usuario = isset($_GET['usuario']) ? $_GET['usuario'] : 'hola';

$nombre_usuario = $_GET['usuario'] ?? $_POST['usuario'] ?? 'hola';

echo $nombre_usuario;
?>
<html>
    <head>
        <title>Hello my name is Marc</title>
    </head>
    <body>
        <form method="post" action="adios.php">
            <p>Enter your username:
                <input type="text" name="user"/>
            </p>
            <p>Enter your password:
                <input type="password" name="pass"/>
            </p>
            <p>
                <input type="submit" name="submit" value="Submit"/>
            </p>
        </form>
<?php
$myname = urlencode("My name is Marc");
echo "<a href='adios.php?myname=$myname'>";
echo "</a";

echo "<a href='adios.php?Hello=$Hello'>";
echo "Hello my name is Marc!";
echo "</a";

$myname = $_GET['usuario'] ?? 'nadie';

$myname = isset($_GET['usuario']) ? $_GET['usuario'] : 'hola';

$myname = $_GET['usuario'] ?? $_POST['usuario'] ?? 'hola';

echo $myname;

date_default_timezone_set('America/New_York');
$month = date('n');
if ($month ==  1) { echo '31'; }
if ($month ==  2) { echo '28 (unless it\'s a leap year)'; }
if ($month ==  3) { echo '31'; }
if ($month ==  4) { echo '30'; }
if ($month ==  5) { echo '31'; }
if ($month ==  6) { echo '30'; }
if ($month ==  7) { echo '31'; }
if ($month ==  8) { echo '31'; }
if ($month ==  9) { echo '30'; }
if ($month == 10) { echo '31'; }
if ($month == 11) { echo '30'; }
if ($month == 12) { echo '31'; }
?>
    </body>
</html>