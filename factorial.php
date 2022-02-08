<html>
<body>
<form method="POST">
Enter the number:
<Input type="text" name="number">
<Input type="Submit" name="Submit">
</form>
</body>
</html>
<?php
if(isset($_POST['Submit']))
{
extract($_POST);
$fact=1;
echo"Factorial of $number:<br><br>";
for($i=1;$i<=$number;$i++)
{
$fact=$fact*$i;
}
echo $fact."<br>";
}
?>
