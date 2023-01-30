<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<link href="style.css" rel="stylesheet" type="text/css" />

<link href="../css/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">




<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js--> 
<script src="js/jquery.min.js"></script>

<!--/js-->
<!--animated-css-->
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->
</head>
<body>
<!--header-->
<!--sticky-->
<?php
if($_SESSION['loginstatus']=="")
{
	header("location:loginform.php");
}
?>

<?php include('function.php'); ?>
<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	$s="delete from users  where Username='" . $_POST["t1"] . "'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Delete');</script>";
}
?>

<?php include('top.php'); ?>
<!--/sticky-->
<div>
<div style="float:left; color:#4e4039; font-size:16px; padding-left:20px;">
<?php include('left.php'); ?>
</div>
</div>

<div style="padding: 140px 0px 0px 460px;">
	<form method="post">
	<table border="0" width="400px" height="200px" class="tableshadow">
	<div>
		<tr><td colspan="2" class="toptd">Delete User</td></tr>
		<tr><td class="lefttxt">Select User</td><td><select name="t1" required/><option value="">Select</option>
	
		<?php
		$cn=makeconnection();
		$s="select * from users";
		$result=mysqli_query($cn,$s);
		$r=mysqli_num_rows($result);
		//echo $r;
	
		while($data=mysqli_fetch_array($result))
		{
	
				echo "<option value=$data[0]>$data[0]</option>";
	
		}
		mysqli_close($cn);
	
	
	
		?>
	
		</select>
	
		<?php
		if(isset($_POST["show"]))
		{
		$cn=makeconnection();
		$s="select * from users where Username='" .$_POST["t1"] ."'";
		$result=mysqli_query($cn,$s);
		$r=mysqli_num_rows($result);
		//echo $r;
	
		$data=mysqli_fetch_array($result);
		$Username=$data[0];
		$Pass=$data[1];
		$Usertype=$data[2];
	
		mysqli_close($cn);
	
		}
	
		?>
	
		</td></tr>
	
		<tr><td>&nbsp;</td><td ><input type="submit" value="Delete" name="sbmt" /></td></tr>
	</div>
	</table>
	</form>
</div>

</body>
</html>

