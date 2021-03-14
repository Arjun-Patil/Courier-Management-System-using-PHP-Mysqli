<?php require_once 'include/header.php';
require 'header1.php'; ?>
<section class="l">


<div class="wrapper">
  <h1 class="he1">Log in</h1>
  <form class="" action="include/login-inc.php" method="post">
    <input type="text" name="username" placeholder="Username" autocomplete="off" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" name="submit" value="Log in">
  </form>


<div class="bottom-text">
  <input type="checkbox" name="remember" checked="checked"> Remember me
</div>

<div class="socials">
  <a class="al" href="#"><i class="fab fa-facebook"></i></a>
  <a class="al" href="#"><i class="fab fa-twitter"></i> </a>
  <a class="al" href="#"><i class="fab fa-pinterest"></i> </a>
  <a class="al" href="#"><i class="fab fa-linkedin"></i> </a>
</div>
</div>
</section>
<?php require_once 'include/footer.php'; ?>
