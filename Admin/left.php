<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
<table style="width:100%; font-size:15px; margin-top: -20px;">
<tr><td style="font-family:Cinzel Decoratives; font-size:30px; padding-bottom:14px; color:#4e4039"><b>Admin Links</b><hr style="color:#4e4039; width: 170px; align-items:left;"></td></tr>

<?php if($_SESSION["usertype"]=="Admin")
{?>

<tr><td style="padding-bottom: 5px; font-weight:600;"><i class='bx bx-chevrons-right'></i>User</a></td></tr>
<tr><td style="padding-bottom: 5px;"><a href="adduser.php"><i class='bx bx-chevron-right'></i>Add User</a></td></tr>
<tr><td style="padding-bottom: 5px;"><a href="updateuser.php"><i class='bx bx-chevron-right'></i>Update User</a></td></tr>
<tr><td style="padding-bottom: 12px;"><a href="deleteuser.php"><i class='bx bx-chevron-right'></i>Delete User</a></td></tr>

<?php }?>

<tr><td style="padding-bottom: 5px; font-weight:600;"><i class='bx bx-chevrons-right'></i>Category</a></td></tr>
<tr><td style="padding-bottom: 5px;"><a href="addcategory.php"><i class='bx bx-chevron-right'></i>Add Category</a></td></tr>


<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td style="padding-bottom: 5px;"><a href="updatecategory.php"><i class='bx bx-chevron-right'></i>Update Category</a></td></tr>
<tr><td style="padding-bottom: 5px;"><a href="deletecategory.php"><i class='bx bx-chevron-right'></i>Delete Category</a></td></tr>
<?php }?>


<tr><td style="padding-bottom: 12px;"><a href="viewcategory.php"><i class='bx bx-chevron-right'></i>View Category</a></td></tr>

<tr><td style="padding-bottom: 5px; font-weight:600;"><i class='bx bx-chevrons-right'></i>Subcategory</a></td></tr>
<tr><td style="padding-bottom: 5px;"><a href="addsubcategory.php"><i class='bx bx-chevron-right'></i>Add Subcategory</a></td></tr>
<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td style="padding-bottom: 5px;"><a href="updatesubcategory.php"><i class='bx bx-chevron-right'></i>Update Subcategory</a></td></tr>
<tr><td style="padding-bottom: 5px;"><a href="deletesubcategory.php"><i class='bx bx-chevron-right'></i>Delete Subcategory</a></td></tr>
<?php }?>

<tr><td style="padding-bottom: 12px;"><a href="viewsubcategory.php"><i class='bx bx-chevron-right'></i>View Subcategory</a></td></tr>

<tr><td style="padding-bottom: 5px; font-weight:600;"><i class='bx bx-chevrons-right'></i>Package</a></td></tr>
<tr><td style="padding-bottom: 5px;"><a href="addpackage.php"><i class='bx bx-chevron-right'></i>Add Package</a></td></tr>

<?php if($_SESSION["usertype"]=="Admin")
{?>
<tr><td style="padding-bottom: 5px;"><a href="updatepackage.php"><i class='bx bx-chevron-right'></i>Update Package</a></td></tr>
<tr><td style="padding-bottom: 5px;"><a href="deletepackage.php"><i class='bx bx-chevron-right'></i>Delete Package</a></td></tr>

<?php }?>

<tr><td style="padding-bottom: 12px;"><a href="viewpackage.php"><i class='bx bx-chevron-right'></i>View Package</a></td></tr>


<tr><td style="padding-bottom: 5px; font-weight:600"><a href="viewenquiry.php"><i class='bx bx-chevrons-right'></i>View Enquiry</a></td></tr>
</table>


</body>
</html>