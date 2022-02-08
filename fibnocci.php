<html>
<body>
<form method="POST">
</form>
</body>
</html>
<?php
function fibnocci($number)
{
if($number==0)
return 0;
else if($number==1)
return 1;
else
return(fibnocci($number-1)+fibnocci($number-2));
}
$number=10;
for($counter=0;$counter<=$number;$counter++)
{
echo fibnocci($counter)," ";
}
?>
