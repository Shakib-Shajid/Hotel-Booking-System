<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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

  <!-- ........................... -->

  <?php
  $s = "select * from category";
  $result = mysqli_query($cn, $s);
  $r = mysqli_num_rows($result);
  //echo $r;
  ?>


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

  <!-- ................................................... -->

  <?php
  $cn = mysqli_connect("localhost", "root", "", "travel");
  $s = "select * from enquiry ORDER BY Enquiryid DESC LIMIT 1";
  $result = mysqli_query($cn, $s);
  $print = mysqli_fetch_row($result);
  ?>


  <div style="float:left; padding-left:150px; padding-top:100px;" class="table-main">
    <table border="0" ; width="700px" height="10px" align="center">
      <p style="font-family:Cinzel Decorative; color:#b0914f; font-size:24px;">Your Details</p>
      <table class="table table-striped table-hover">
        <tr>
          <td>Name</td>
          <td><?php echo $print[2]; ?></td>
        </tr>
        <tr>
          <td>Gender</td>
          <td><?php echo $print[3]; ?></td>
        </tr>
        <tr>
          <td>Phone Number</td>
          <td><?php echo $print[4]; ?></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><?php echo $print[5]; ?></td>
        </tr>
        <tr>
          <td>Price</td>
          <td><?php echo $print[6]; ?></td>
        </tr>
        <tr>
          <td>Days</td>
          <td><?php echo $print[7]; ?></td>
        </tr>
        <tr>
          <td>Children</td>
          <td><?php echo $print[8]; ?></td>
        </tr>
        <tr>
          <td>Adult</td>
          <td><?php echo $print[9]; ?></td>
        </tr>
        <tr>
          <td>Message</td>
          <td><?php echo $print[10]; ?></td>
        </tr>
      </table>
  </div>

  <!-- ............................................ -->
  <?php
  require('stripe-php-master/init.php');

  $publishableKey = "pk_test_51JX9CdIBCH1CFRSNIWgddNUSZzrMeBnsyqwgPtewN78vz5ZBOySAsVBhrOIjqidrK77FdjE6hpTYrHw7E1HyRcRe00LmSM4YQg";

  $secretKey = "sk_test_51JX9CdIBCH1CFRSNZC2PVySE0tSZx46wLgSNzxJhpurlhcDKQOcnUREsqo7pfB8ldeNo6cJLgquDvWVwQrLnV4GQ00oJtarJPG";

  \Stripe\Stripe::setApiKey($secretKey);

  ?>
  <!-- ............................................ -->

  </table>

  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

  <form style="padding-left: 350px;" action="submit.php" method="post">
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="<?php echo $publishableKey ?>" data-amount="<?php echo $print[6]; ?>" data-name="Ocean Sunrise" data-description="Booking Hotel" data-image="images/images.png" data-currency="USD">
    </script>

  </form>

  <!-- ............................................ -->

  <!-- ............................................ -->

</body>

</html>
