<html>
<body>
<form method="POST">Enter the number:
<Input type="text" name="number"><br>
Enter the limit:
<Input type="text" name="limit">
<Input type="Submit" name="Submit">
</form>
</body>
</html>
<?php
if(isset($_POST['Submit']))
{
extract($_POST);
for($i=1;$i<=$limit;$i++)
{
$c=$i*$number;
echo $i."x".$number."=".$c;
echo"<br>";
}
}
?>
