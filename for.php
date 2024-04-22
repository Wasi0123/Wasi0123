
<?php
 for ($i=0;$i<3;$i++){
    echo '<section><p>This is the content number ' .$i.'</p></section>';
 }
 for ($i=0;$i<10;$i++){
    echo "i is $i</br>";

 }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$array = array( 1, 2, 3, 4, 5);
foreach( $array as $value )
{
echo "Value BEFORE is $value <br />";
if( $value == 3 )continue;
echo "Value is $value <br />";
}
?>
    
</body>
</html>