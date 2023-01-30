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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <!-- GlightBox -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/css/glightbox.min.css" integrity="sha512-T+KoG3fbDoSnlgEXFQqwcTC9AdkFIxhBlmoaFqYaIjq2ShhNwNao9AKaLUPMfwiBPL0ScxAtc+UYbHAgvd+sjQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Template Main CSS File -->
  <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" />
</head>

<body>
<?php include('top.php'); ?>
  
  <div style="height:20px"></div>
  <div style="width:1000px; margin:50px">

    <div style="width:200px; font-size:18px; color:#09F; float:left">

      <table cellpadding="0" cellspacing="0" width="1000px">
        <tr>
          <td style="font-family:Cinzel Decorative; font-size:30px; padding-left:14px; padding-top:20px; color:#4e4039"><b>Category</b>
            <hr style="width: 150px; height: 2px;">
          </td>
        </tr>


        <?php include('function.php');
        // <?php

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

    <div style="width:500px; float:left">
      <table cellpadding="0px" cellspacing="0" width="1000px">
        <!-- <tr><td class="headingText"></td><h3 style="font-family:Cinzel Decorative; font-size:30px; padding-left:85px; width:1115px; margin-top:28px; color:#b0914f;">Package Details</h3></tr> -->
        <tr>
          <td style="width:1115px; padding-left:25px; height:600px;" class="paraText" width="900px">
            <table cellpadding="0" cellspacing="0" width="900px" border="0">
              <tr>
                <td>

                  <table border="0" width="1000px" height="400px">
                    <?php

                    $s = "select * from package,category,subcategory where package.category=category.cat_id and package.subcategory=subcategory.subcatid and package.Packid='" . $_GET["pid"] . "'";
                    $result = mysqli_query($cn, $s);
                    $r = mysqli_num_rows($result);
                    //echo $r;
                    $n = 0;
                    $data = mysqli_fetch_array($result);
                    mysqli_close($cn);
                    ?>

                    <tr>
                    <td style="font-family:Cinzel Decorative; color:#b0914f; font-size:24px; padding-bottom:20px; padding-top:20px;" colspan="4"><?php echo $data[10]; ?> > <?php echo $data[12]; ?> > <?php echo $data[1]; ?></td>
                    </tr>

                    <tr>

                      <div style="padding-left:px; width:1040px; height:300px;" id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="Admin/packimages/<?php echo $data[5]; ?>" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="Admin/packimages/<?php echo $data[6]; ?>" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="Admin/packimages/<?php echo $data[7]; ?>" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>


                      <!-- <td class="middletext"><img src="Admin/packimages/<?php echo $data[5]; ?>" width="200px" height="200px"  /></td>

<td class="middletext" style="padding-left:15px"><img src="Admin/packimages/<?php echo $data[6]; ?>" width="200px" height="200px"  /></td>

<td class="middletext" style="padding-left:15px"><img src="Admin/packimages/<?php echo $data[7]; ?>" width="200px" height="200px"  /></td> -->
                    </tr>

                    <!-- <tr><td  colspan="3" height="90px"><span class="middletext" style="">Category:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo $data[10]; ?>
 <br/>
  <span class="middletext">Subcategory:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <?php echo $data[12]; ?>
  <br/>
   <span class="middletext">Price:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <?php echo $data[4]; ?>
</td></tr> -->

                    <tr>
                      <td style="padding-top:15px; line-height: 32px;" colspan="4"><?php echo $data[8]; ?></td>
                      
                    </tr>
                    <tr>
                      <td style="padding-top: 25px; padding-bottom: 45px;" align="center" colspan="4" height="50px">
                        <div class="svg-wrapper">
                          <svg height="40" width="181" xmlns="http://www.w3.org/2000/svg" style="margin-left: -60px;">
                            <rect class="shape" height="40" width="181"></rect>
                          </svg>
                          <div class="text">
                            <a href="enquiry.php?pid=<?php echo $data[0];   ?>"><span class="spot"></span> <i class="fa fa-dollar"></i><b> BDT <?php echo $data[4]; ?>/Night</b></a>  
                           
                          </div>
                        </div>
                        <!-- <a href="enquiry.php?pid=<?php echo $data[0];   ?>"><input class="btn btn-outline-secondary" type="button" value="BDT <?php echo $data[4]; ?>/Night" name="sbmt" /></a> -->
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </div>
  </div>

  <!-- ................................................................ -->


  <?php  
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
    echo $url;  
  ?>  




  <!-- ................................................................ -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>
