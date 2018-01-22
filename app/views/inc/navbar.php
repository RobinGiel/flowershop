     
      <header>
      </header>
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
          <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?php echo URLROOT; ?>/pages/index"><?php echo SITENAME; ?></a>
          <img class="d-block" width="90px" src="<?php echo URLROOT ?>/img/flowerpowerlogo.png" alt="logo">
        <!-- HERE IS MEDEWERKER -->
        <?php if(isset($_SESSION['user_id']) && $_SESSION['user_role'] === 'medewerker' || isset($_SESSION['user_id']) && $_SESSION['user_role'] === 'klant' ) : ?>
          <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
              <li class="nav-item text-nowrap">
                <a class="nav-link mr-md-2" href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Welcome <?php  $id = $_SESSION['user_id'];
                $user = $this->userModel->getUserById($id); echo $user->name; ?></a>
              </li>
          </ul>
          <ul class="navbar-nav pull-left">
              <li class="nav-item text-nowrap">
                <a class="nav-link mr-md-2 btn btn-dark" style="color: white !important;padding: 20px !important" href="<?php echo URLROOT; ?>/users/logout">Logout <i class="fa fa-sign-out" aria-hidden="true"></i></a>
              </li>
          </ul>
        </nav>
        <?php else : ?>
        <ul class="navbar-nav pull-left">
          <li class="nav-item text-nowrap">
            <a class="nav-link  mr-md-2 btn btn-dark" style="color: white !important;padding: 20px !important" href="<?php echo URLROOT; ?>/users/login">Login <i class="fa fa-sign-in" aria-hidden="true"></i></a>
          </li>
          </ul>
        </nav>
    <?php endif;?>

        <!-- BEGINNING OF SIDE NAV -->
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo URLROOT; ?>/pages/contact"><i class="fa fa-phone" aria-hidden="true"></i> Contact </a>
              </li>
         <?php if(isset($_SESSION['user_id']) && $_SESSION['user_role'] === 'medewerker' ) : ?>
              <li class="nav-item text-nowrap">
                <a class="nav-link" href="<?php echo URLROOT; ?>/orders"><i class="fa fa-clipboard" aria-hidden="true"></i> Orders</a>
              </li>
              <li class="nav-item text-nowrap">
                <a class="nav-link" href="<?php echo URLROOT; ?>/accounts"><i class="fa fa-cog" aria-hidden="true"></i> Account</a>
              </li>
            </ul>

            <ul class="nav flex-column mb-2">
          <?php  elseif(isset($_SESSION['user_id']) && $_SESSION['user_role'] === 'klant' ) : ?>
          <li class="nav-item text-nowrap">
            <a class="nav-link" href="<?php echo URLROOT; ?>/shoppingcarts"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart</a>
          </li>
          <li class="nav-item text-nowrap">
            <a class="nav-link" href="<?php echo URLROOT; ?>/orders"><i class="fa fa-clipboard" aria-hidden="true"></i> Orders</a>
          </li>
          <li class="nav-item text-nowrap">
            <a class="nav-link" href="<?php echo URLROOT; ?>/accounts"><i class="fa fa-cog" aria-hidden="true"></i> Account</a>
          </li>
          <li class="nav-item text-nowrap">
            <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
          </li>
    <?php endif; ?>
            </ul>
          </div>
        </nav>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">