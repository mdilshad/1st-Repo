<?php
$var="Addy Singh M100068CA, Dilshad Khan M100100CA, Ritesh Chandora M100118CA";
$array=explode(', ',$var);

$i=0;
$cnt=count($array);
echo '<b>NAME&nbsp;&nbsp;&nbsp;ROLL</b><br />';
echo "Hello World";
while($i<$cnt)
{
	echo $array[$i].'<br />';
	$i++;
}
?>
