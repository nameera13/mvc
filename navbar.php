<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <p class="navbar-brand">
        <img src="<?php echo $baseurl; ?>images/logo.jpg" alt="" width="40px" height="40px" class="mt-3">
    </p>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="<?php echo $mainurl; ?>Contact-us" tabindex="-1" aria-disabled="true">ContactUs</a>
        </li>

        <?php
        if(!isset($_SESSION["rid"]))
        {
        ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            My Account
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#reg">Register</a></li>
            <li><a class="dropdown-item" href="<?php echo $mainurl; ?>">Login</a></li>
          </ul>
        </li>
        <?php
        }
        else
        {
        ?>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome: <b class="text-success"><?php echo ucfirst($_SESSION["fnm"]); ?></b>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo $mainurl; ?>ManageProfile">Manage Profile</a></li>
            <li><a class="dropdown-item" href="<?php echo $mainurl; ?>ManageallUsers">Manage All Users <span class="badge badge-danger bg-danger"><?php echo $countuser[0]["total"];?></span> </a></li>
            <li><a class="dropdown-item" href="<?php echo $mainurl; ?>ChangePassword">Change Password</a></li>
            <li><a class="dropdown-item" href="<?php echo $mainurl;?>?delete-user=<?php echo base64_encode($shwdata[0]["r_id"]); ?>" onclick="return confirm('Are you sure to Delete Account?')">Delect Account</a></li>
            <li><a class="dropdown-item" href="<?php echo $mainurl; ?>?logout-here" onclick="return confirm('Are you sure to Logout user?')">Logout!</a></li>
          </ul>
        </li>
        <?php
        }
        ?>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>