<?php require 'include/header.php';
require 'header1.php'; ?>

<section class="c">


<div class="contact-box">

<!--
<h1>CONTACT US</h1> -->

<form class="txtb" action="include/contact-inc.php" method="post">


  <input type="text" name="name" class="input-field" placeholder="Your Name" autocomplete="off" required> <br> <br>


  <input type="email" name="email" class="input-field" placeholder="Your Email" autocomplete="off" required><br> <br>


  <input type="text" name="subject" class="input-field" placeholder="Subject" autocomplete="off" required><br> <br>

<textarea name="message" type="text" class="input-field textarea-field" placeholder="Your message" autocomplete="off" required></textarea>

  <input type="submit" name="submit" class="btn" value="Submit">

  <input type="reset" class="btn" value="Reset">

</form>
</div>
</section>
<?php include_once 'footer.php' ?>
