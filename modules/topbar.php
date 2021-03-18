<nav class="navbar navbar-expand navbar-dark topbar mb-4 static-top shadow" style="background: #87B1FD; no-repeat; padding-top: 10px; height: 100px;">
  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
	<i class="fa fa-bars"></i>
  </button>

  <div style="color: white" class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-text mx-0"><h2><strong>SISTEM INFORMASI AKUNTANSI</strong></h2>
        									                   <h4><strong>EKSPEDISI CIBA TITIPAN</strong></h4>
        </div>
  </div>

  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">
	<!-- Nav Item - User Information -->
	<li class="nav-item active">
	  <a class="nav-link href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		<span class="mr-2 d-none d-lg-inline text-black-600 medium"><?php echo $_SESSION['username'];?></span>
		<img class="img-profile rounded-circle" src="<?php echo $base_url;?>resources/si.png">
	  </a>
	</li>
  </ul>
</nav>