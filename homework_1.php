
<html>
	<head>
		<style type="text/css">
			body
{
background-color:rgb(250,200,0);
}
p.red
{
color:red;font-size:20;
}
p.blue
{
color:blue;font-size:20;
}
p.black
{
color:black;font-size:20;
}
</style>

<?php
function isprime($a)
{
$b=sqrt($a);
for($i=2;$i<=$b;$i++)
{if ($a%$i==0) return False;}
return True;
}

?>
		
	</head>
<body>
<?php 
$a=$_GET["number"];

if (!is_numeric($a))
 echo '<p class="red">The parameter is not a number</p>';
else if ($a<0 or $a>19999)
 echo '<p class="red">The parameter is not within the range [0,19999]</p>';
else if (isprime($a))
 echo '<p class="black">The number '.$a.' is prime !</p>';
else echo '<p class="blue">The number ',$a, ' is NOT prime !</p>';

 ?>
	

</body>
</html> 