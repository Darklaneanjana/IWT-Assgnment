
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="../css/common.css">
    <script src="../js/contact.js"></script>
    <title>
        Contact_us
    </title>

<body>
    <script language = "javascript" type = "text/javascript">
        <!--
        //    document.write("Hello World!")
        //-->
     </script>  
<?php
require_once('php/header.php');
?>



<div class="contact-section">
        <div class="contact-info">
          <div><i class="fas fa-map-marker-alt"></i>421/59 A Darley Road, Colombo, Sri Lanka</div>
          <div><i class="fas fa-envelope"></i>psharpe@mac.com.</div>
          <div><i class="fas fa-phone"></i>(+94) ( 011) 2692744</div>
          <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
        </div>
    <div class="wrapper">
        <h2>Contact us</h2>
        <div id="error_message">
           
        </div>
        <form action="connect.php" method="POST"  id="myform" onsubmit = "return validate();">
          <div class="input_field">
              <input type="text" name="Name" placeholder="Name" id="name">
          </div>
          <div class="input_field">
              <input type="text" name="Subject" placeholder="Subject" id="subject">
          </div>
          <div class="input_field">
              <input type="text" name="Phone" placeholder="Phone" id="phone">
          </div>
          <div class="input_field">
              <input type="text" name="Email" placeholder="Email" id="email">
          </div>
          <div class="input_field">
              <textarea name="Message" placeholder="Message" id="message"></textarea>
          </div>
          <div class="btn">
              <input type="submit" name="ok">
          </div>
        </form>

      </div>
</div>







<?php
require_once('php/footer.php');
?> 
