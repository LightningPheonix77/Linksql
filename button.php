<html>
<head>
<body>
<style>
div
{
	width:200px;
	height:200px;
	background-color:black;
	color:white;
	text-align:center;
}
</style>
	<p id="d"></p>
	<script>
document.getElementById("d").innerHTML="hello world";
</script>
</body>
</head>
</html>
<?php
$s="localhost";
$u="root";
$p="";
$db="form";
$connection=mysqli_connect($s,$u,$p,$db);
if(!$connection)
{
	echo"connection problem";
}
else
{
	echo"connected successfully";
}
$cmd="select * from info";
$colu="show columns from info";
$col=mysqli_query($connection,$colu);
$query=mysqli_query($connection,$cmd);
$arr=mysqli_fetch_all($query,MYSQLI_NUM);
$coun=mysqli_num_rows($query);	
$cou=mysqli_num_fields($query);
echo"<br/> The columns are $cou<br/>";
echo"<br/> The rows are $coun<br/>";
for($i=0;$i<$coun;$i++)
{
	for($j=0;$j<$cou;$j++)
	{
		echo"the value of [$i][$j]={$arr[$i][$j]}<br/>";
	}
}
foreach($query as $vau)
{
	echo"<br/>{$vau["username"]}";
}

?>