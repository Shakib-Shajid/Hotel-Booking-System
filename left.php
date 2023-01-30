<?php include('function.php'); ?>

<div style="height:20px"></div>

<div style="width:1000px; margin:50px" >

<div style="width:200px; float:left">

<table cellpadding="0" cellspacing="0" width="1000px">
<tr><td style="font-family:Cinzel Decoratives; font-size:30px; padding-left:14px; padding-top:20px; color:#4e4039"><b>Category</b><hr style="width: 150px; height: 2px;"></td></tr>


<?php

$s="select * from category";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	
		echo "<tr><td style='font-size:15px; padding:15px;'><a href='subcatagory.php?catid=$data[0]'>$data[1]</a></td></tr>";

}
mysqli_close($cn);
?>

</table>
</div>
</div>