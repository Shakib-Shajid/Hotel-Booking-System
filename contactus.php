<?php
 include('function.php'); 

if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();

  $s = "INSERT INTO `contactus`(`Name`, `Phno`, `Email`, `Message`) VALUES ('" . $_POST["t1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "')";

	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Successfully Send');</script>";
}
?>

<!-- ======= Contact Us Section ======= -->
<section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contact Us</h2>
          <p>Contact us the get started</p>
        </div>
        <div class="row">
          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location</h4>
                <p>28-29, Hotel Motel Zone, Road, Cox's Bazar 4700</p> <br> <br>
              </div>
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email</h4>
                <p>sunrise@hotel.com.bd</p>
              </div>
              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call</h4>
                <p>0521-65874</p>
              </div>
            </div>
          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <form method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="t1" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group col-md-6 mt-3 mt-md-0">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="t2" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="t3" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <label for="name">Message</label>
                <textarea class="form-control" name="t4" rows="10" required></textarea>
              </div>
              <div class="text-center"><button type="submit" name="sbmt">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Us Section -->