<html>
<head>
<style>
body {
  background-color: #00FFFF;
}
</style>
</head>
</html>
<?php
require"config.php";
session_start();
?>
<?php
 $command=escapeshellcmd('python abuseapi.py');
 $output=shell_exec($command);
 $result1 = mysqli_query($con,"SELECT * FROM usercomments");
echo"<center><table border='1' cellpadding='20'><tr><th>Comment</th><th>Delete</th></tr>";
if(mysqli_num_rows($result1)>0){
	
	
while($row = mysqli_fetch_array($result1))
{
$c=$row['v'];
if($c>0.5)
{echo"<tr><td>";
echo$row['comment'];
echo"</td><br>";	
echo"<td><a href='delete.php?id=".$row['comment']."'>delete</a>";
echo"</td></tr>";}
}
}
echo"</table></center>";


 ?>
