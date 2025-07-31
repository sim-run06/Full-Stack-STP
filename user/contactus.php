<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Florify</title>
  <link rel="icon" type="image/png" href="../assets/images/me-favv.png" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../assets/css/contact.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/global.css" />
</head>
<body>

<div class="container-fluid contact-container">
  <?php include 'includes/navbar-user.php' ?>
  <div class="row contact-box">
    <div class="col-sm-7 form-box">
      <h2>Send us a Message</h2>
      <p>Fill out the form below and we'll get back to you within 24 hours</p>

      <form>
        <div class="row">
          <div class="col-sm-6">
            <input type="text" class="form-control" placeholder="Full Name" required>
          </div>
          <div class="col-sm-6">
            <input type="email" class="form-control" placeholder="Email Address" required>
          </div>
        </div>

        <div class="row" style="margin-top:10px;">
          <div class="col-sm-6">
            <input type="text" class="form-control" placeholder="Phone Number" required>
          </div>
          <div class="col-sm-6">
            <input type="text" class="form-control" placeholder="Subject" required>
          </div>
        </div>

        <div class="row" style="margin-top:10px;">
          <div class="col-sm-12">
            <textarea class="form-control" rows="4" placeholder="Message" required></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-custom btn-block" style="margin-top:10px;">SEND MESSAGE</button>
      </form>
    </div>

    <div class="col-sm-5 info-box">
      <h2>Contact Information</h2>
      <p>Reach out to us through any of these channels</p>

      <p><i class="fa fa-phone"></i> +91 9874563210</p>
      <p><i class="fa fa-envelope"></i> florify@gmail.com</p>
      <p><i class="fa fa-map-marker-alt"></i> Sector 17, Chandigarh, India</p>

      <h3>Business Hours</h3>
      <p><i class="fa fa-clock"></i> Mon - Fri: 9:00 AM - 6:00 PM</p>
      <p><i class="fa fa-clock"></i> Sat - Sun: 10:00 AM - 4:00 PM</p>
    </div>

  </div>

  <h2 class="location-title">Our Location</h2>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.0200879684035!2d76.7835!3d30.741482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fec05a84e5dbd%3A0x66fdbf6e8f5b4e8c!2sSector%2017%2C%20Chandigarh!5e0!3m2!1sen!2sin!4v1691234567890"
    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  <?php include 'includes/footer.php' ?>
</div>

</body>
</html>
