<html>
<body>
<form method="POST">
Enter the number:
<Input type="number" name="number">
<Input type="Submit" name="Submit">
</form>
</body>
</html>
<?php
if(isset($_POST['Submit']))
{
extract($_POST);
$a=$number;
$sum=0;
while($a!=0)
{
$rem=$a%10;
$sum=$sum+($rem*$rem*$rem);
$a=$a/10;
}
if($number==$sum)
{
echo "it is an Armstrong number";
}
else
{
echo "is not an Armstrong number";
}
}
?>
