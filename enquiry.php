<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>New Added page</title>
  <!-- add icon link -->
  <link rel="icon" href="images/LOGO_icon.png" type="image/x-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!--Bootstrap-icons-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css" />
  <!--Boxicons-->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <!--Font Awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <!-- GlightBox -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/css/glightbox.min.css" integrity="sha512-T+KoG3fbDoSnlgEXFQqwcTC9AdkFIxhBlmoaFqYaIjq2ShhNwNao9AKaLUPMfwiBPL0ScxAtc+UYbHAgvd+sjQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Template Main CSS File -->
  <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" />
</head>

<body>
  <?php include('top.php'); ?>


  <?php include('function.php'); ?>
  <?php
  if (isset($_POST["sbmt"])) {
    $cn = makeconnection();
    $s = "insert into enquiry(Packageid,Name,Gender,Mobileno,Email,Price, NoofDays,Child,Adults,Message,Statusfield) 
                values('" . $_REQUEST["pid"] . "','" . $_POST["t1"] . "','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t8"] . "', '" . $_POST["t4"] . "'  ,'" . $_POST["t5"] . "','" . $_POST["t6"] . "','" . $_POST["t7"] . "','Pending')";


    mysqli_query($cn, $s);

    $redirect_page = 'http://localhost/ocean/view.php';
    header('Location:'  . $redirect_page);
    die();
  }
  ?>


  <!--/sticky-->
  <div style="width:1000px;">

    <div style="width:200px; font-size:18px; padding-top: 70px; padding-left: 50px; color:#09F; float:left">
      <table cellpadding="0" cellspacing="0" width="1000px">
        <tr>
          <td style="font-family:Cinzel Decorative; font-size:30px; padding-left:14px; padding-top:20px; color:#4e4039"><b>Category</b>
            <hr style="width: 150px; height: 2px;">
          </td>
        </tr>

        <?php

        $s = "select * from category";
        $result = mysqli_query($cn, $s);
        $r = mysqli_num_rows($result);
        //echo $r;
        while ($data = mysqli_fetch_array($result)) {

          echo "<tr><td style='font-size:15px; padding:15px;'><a href='subcatagory.php?catid=$data[0]'>$data[1]</a></td></tr>";
        }

        ?>
      </table>

    </div>

    <div style="width:800px; float:left">
      <table cellpadding="0px" cellspacing="0" width="1000px">
        <!-- <tr><td class="headingText"><h3 style="font-family:Cinzel Decorative; font-size:30px; padding-left:85px; width:1115px; margin-top:28px; color:#b0914f;">Enquiry</h3></td></tr> -->
        <tr>
          <td class="paraText" width="900px">
            <table cellpadding="0" cellspacing="0" width="900px">
              <td>

                <table border="0" ; width="600px" height="400px" align="center">
                  <?php

                  $s = "select * from package,category,subcategory where package.category=category.cat_id and package.subcategory=subcategory.subcatid and package.packid='" . $_GET["pid"] . "'";

                  $result = mysqli_query($cn, $s);
                  $r = mysqli_num_rows($result);
                  //echo $r;
                  $n = 0;
                  $data = mysqli_fetch_array($result);
                  mysqli_close($cn);
                  ?>

                  <form method="post" enctype="multipart/form-data">
                    <!-- <tr><td colspan="3" class="middletext">Package Id:&nbsp;&nbsp;&nbsp;<?php echo $data[0]; ?></td></tr> -->
                    <tr style="font-family:Cinzel Decorative; color:#b0914f; font-size:24px;" colspan="4">
                      <td style="padding-bottom:40px;" colspan="3" class="middletext"><?php echo $data[1]; ?> > Enquiry </td>
                    </tr>

                    <tr>
                      <td style="padding: 15px 0px 15px 0px;" class="lefttxt"><b>Price:</b></td>
                      <td><input type="number" name="t8" readonly  class="form-control" min="<?php echo $data[4]; ?>" max="<?php echo $data[4]; ?>" value="<?php echo $data[4]; ?>"></td>
                    </tr><br />

                    <tr>
                      <td style="padding: 15px 0px 15px 0px;" class="lefttxt"><b>Name:</b></td>
                      <td><input type="text" name="t1" required pattern="[a-zA-z1 _]{3,50}" class="form-control" title="Please Enter Only Characters and numbers between 1 to 50 for Name" /></td>
                    </tr><br />
                    <tr>
                      <td style="padding: 15px 0px 15px 0px;" class="lefttxt"><b>Gender:</b></td>
                      <td><input type="radio" class="form-check-input" name="r1" value="Male" checked="checked" /> Male <input type="radio" class="form-check-input" name="r1" value="Female" /> Female </td>
                    </tr><br />
                    <tr>
                      <td style="padding: 15px 0px 15px 0px;" class="lefttxt"><b>Mobile No.</b></td>
                      <td><input type="text" name="t2" required pattern="[0-9]{10,12}" class="form-control" title="Please Enter Only numbers between 10 to 12 for Mobile No" /></td>
                    </tr><br />
                    <tr>
                      <td style="padding: 15px 0px 15px 0px;" class="lefttxt"><b>Email:</b></td>
                      <td><input type="email" name="t3" class="form-control" required /></td>
                      <td><br />
                    <tr>
                      <td style="padding: 15px 0px 15px 0px;" class="lefttxt"><b>No.of Days:</b></td>
                      <td><input type="number" name="t4" required pattern="[1 _]{1,20}" min="1" class="form-control" title="Please Enter Only numbers between 1 to 20 for No. oF Days" /></td>
                      <td><br />
                    <tr>
                      <td style="padding: 15px 0px 15px 0px;" class="lefttxt"><b>No.of Children:</b></td>
                      <td><input type="number" name="t5" required pattern="[1 _]{1,10}" min="0" class="form-control" title="Please Enter Only numbers between 1 to 10 for Children" /></td>
                      <td><br />
                    <tr>
                      <td style="padding: 15px 0px 15px 0px;" class="lefttxt"><b>No.of Adults:</b></td>
                      <td><input type="number" name="t6" required pattern="[1 _]{1,20}" min="1" class="form-control" title="Please Enter Only numbers between 1 to 20 for No.Of Adults" /></td>
                      <td><br />
                    <tr>
                      <td style="padding: 15px 0px 15px 0px;" class="lefttxt"><b>Enquiry Message:</b></td>
                      <td style="padding: 10px 0px 15px 0px;"><textarea name="t7" class="form-control" required="required" /></textarea></td>
                      <td><br />
                    <tr>
                      <td>&nbsp;</td>
                      <td style="padding: 0 0px 20px 0px;"><input type="submit" value="Submit" name="sbmt" class="btn btn-outline-secondary"></td>
                    </tr>
                    <!-- <tr><td><button type="submit" class="btn btn-outline-secondary">Secondary</button></td></tr> -->

                  </form>
              </td>
        </tr>
      </table>
      </td>
      </table>
      </td>
      </tr>
      </table>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
