<?php
if( $_GET["name"] || $_GET["age"] )
{
echo "Welcome ". $_GET['name']. "<br />";
echo "You are ". $_GET['age']. " years old.";
exit();
}
if( $_POST["name"] || $_POST["age"] )
{
echo "Welcome ". $_POST['name']. "<br />";
echo "You are ". $_POST['age']. " years old.";
exit();
}
session_start();
if( isset( $_SESSION['counter'] ) )
{
$_SESSION['counter'] += 1;
}
else
{
$_SESSION['counter'] = 1;
}
$msg = "You have visited this page  ". $_SESSION['counter'];
$msg .= " in this session.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
<form action="<?php $_PHP_SELF ?>" method="GET">
Name: <input type="text" name="name" />
Age: <input type="text" name="age" />
<input type="submit" />
</form>
<form action="<?php $_PHP_SELF ?>" method="POST">
Name: <input type="text" name="name" />
Age: <input type="text" name="age" />
<input type="submit" />
</form>
<?php echo ( $msg ); ?>
</body>
</html>