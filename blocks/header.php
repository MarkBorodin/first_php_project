 <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal">Some company</h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <a class="p-2 text-dark" href="/PhpProjectNew/index.php">Main page</a>
      <a class="p-2 text-dark" href="/PhpProjectNew/about.php">About</a>
      <!--<a class="p-2 text-dark" href="#">Support</a>-->
      <!--<a class="p-2 text-dark" href="#">Pricing</a>-->
    </nav>
    
    <?php if ($_COOKIE['user'] == 'yes'): ?>
    <a class="btn btn-outline-primary" href="auth.php">Profile</a>
    
    <?php else: ?>
    <a class="btn btn-outline-primary" href="auth.php">Sign up</a>
    
    <?php endif; ?>
    
 </div> 
