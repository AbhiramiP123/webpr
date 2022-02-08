<html>
<body>
<form method="POST">
Enter a number:
<input type="number" name="number">
<input type="submit" name="submit">
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
extract($_POST);
for($i=2;$i<=$number-1;$i++)
{
if($number%$i==0)
{
$value=True;
}
}
if(isset($value)&& $value)
{
echo'The number'.$number."is not a prime";
}
else
{
echo 'The number'.$number."is a prime";
}
}
?>
