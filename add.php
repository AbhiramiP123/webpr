<html>
<body>
<form method ="POST">
Enter a number:
<input type="number" name="number">
<input type="submit" name="submit">
</form>
</body>
</html>
<?php
error_reporting(0);
$a=$_POST['number'];
if(isset($_POST['submit']))
{
$sum=0;
while($a!=0)
{
$rem=$a%10;
$a=$a/10;
$sum=$sum+$rem;
}
echo "Sum of digits is:";
echo $sum;
}
?>
