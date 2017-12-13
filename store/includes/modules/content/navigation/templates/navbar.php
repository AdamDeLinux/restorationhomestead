<nav class="navbar<?php echo $navbar_style . $navbar_corners . $navbar_margin . $navbar_fixed; ?> navbar-light navbar-custom" role="navigation">
  <div class="<?php echo BOOTSTRAP_CONTAINER; ?>">
    <?php
    if ($oscTemplate->hasBlocks('navbar_modules_home')) {
      echo '<div class="navbar-header">' . PHP_EOL;
      echo $oscTemplate->getBlocks('navbar_modules_home');
      echo '</div>' . PHP_EOL;
    }
    
    ?>
    <a class="navbar-brand" href="#">
          
            <img src="images/logo.png" alt="Restoration Homestead">
         
      </a>
    <div class="collapse navbar-collapse" id="bs-navbar-collapse-core-nav">
      <?php
      if ($oscTemplate->hasBlocks('navbar_modules_left')) {
        echo '<ul class="nav navbar-nav">
        <li class="nav-item">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="./store">Visit Store</a>
                <a class="dropdown-item" href="#">Pork</a>
                <a class="dropdown-item" href="#">Beef</a>
                <a class="dropdown-item" href="#">Bread</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Farmer\'s Market</a>
            </li>
        ' . PHP_EOL;
          
        echo $oscTemplate->getBlocks('navbar_modules_left');
        echo '</ul>' . PHP_EOL;
      }
      if ($oscTemplate->hasBlocks('navbar_modules_right')) {
        echo '<ul class="nav navbar-nav navbar-right">' . PHP_EOL;
         
        echo $oscTemplate->getBlocks('navbar_modules_right');
        echo '</ul>' . PHP_EOL;
      }
      ?>
    </div>
  </div>
</nav>
<?php echo $navbar_css; ?>
