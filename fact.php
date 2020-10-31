<html>
<body>
<?php
$a=$_GET["num"];
$fact=1;
for($i=1;$i<=$a;$i++)
{
	$fact=$fact*$i;
}
echo "Factorial of".$a." is".$fact;

?>
</body>
</html>