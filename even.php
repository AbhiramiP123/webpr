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
if($number%2==0)
{
echo "$number is even number";
}
else
{
echo "$number is odd number";
}
}
?>
