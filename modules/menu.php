<?Php if(@$_SESSION['level']=="Admin"){ ?>
<!-- Sidebar - Brand -->
      <a class="text-dark sidebar-brand d-flex align-items-center justify-content-center">
        <!--bikin div img logo disini-->
        <div class="sidebar-brand-text mx-3" style="padding-top: 30px;">
          <img src="resources/a.png" width="130px;">
        </div>
      </a>
      <!-- Divider -->
      <div style="padding-bottom: 40px;"></div>
     
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a style="color: white; text-align: center; padding-right: 30px;" class="nav-link" href="index.php?pages=home-admin">
          <span><strong>Beranda</strong></span>
        </a>
      </li>
      <!-- Divider -->
      <hr style="border-color: white" class="sidebar-divider my-0">

      <!-- Heading -->
      <li class="nav-item active">
        <a style="color: white; text-align: center;" class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
        <span><strong>Transaksi</strong></span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="index.php?pages=pemasukan">Pemasukan</a>
            <a class="collapse-item" href="index.php?pages=pengeluaran">Pengeluaran</a>
            <a class="collapse-item" href="index.php?pages=beban">Beban</a>
            <a class="collapse-item" href="index.php?pages=prive">Prive</a>
            <a class="collapse-item" href="index.php?pages=modal">Modal</a>
          </div>
        </div>
      </li>

      <hr style="border-color: white" class="sidebar-divider my-0">

		 <!-- Heading -->
      <li class="nav-item active">
        <a style="color: white; text-align: center;" class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#perekapan" aria-expanded="true" aria-controls="perekapan">
          <span><strong>Pembukuan</strong></span>
        </a>
        <div id="perekapan" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
			      <a class="collapse-item" href="index.php?pages=jurnalumum">Jurnal Umum</a>
            <a class="collapse-item" href="index.php?pages=bukubesar">Buku Besar</a>			
            <a class="collapse-item" href="index.php?pages=neracasaldo">Neraca Saldo</a>
          </div>
        </div>
      </li>

      <hr style="border-color: white" class="sidebar-divider my-0">

      <!-- Heading -->
      <li class="nav-item active">
        <a style="color: white; text-align: center;" class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <span><strong>Laporan</strong></span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="index.php?pages=laporan-labarugi">Laba Rugi</a>
            <a class="collapse-item" href="index.php?pages=laporan-neraca">Neraca</a>
            <a class="collapse-item" href="index.php?pages=laporan-perubmodal">Perubahan Modal</a>
            
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr style="border-color: white" class="sidebar-divider my-0">
      <li class="nav-item active">
        <a  class="nav-link" style="cursor:pointer; color: white; text-align: center; padding-right: 30px;" onclick="if(confirm('Apakah anda yakin keluar dari sistem ?')){window.location.href='login.php'}">
          <span><strong>Logout</strong></span></a>
      </li>






	  
<?Php } else if (@$_SESSION['level']=="Owner"){?>

  <a class="text-dark sidebar-brand d-flex align-items-center justify-content-center">
        <!--bikin div img logo disini-->
        <div class="sidebar-brand-text mx-3" style="padding-top: 30px;">
          <img src="resources/a.png" width="130px;">
        </div>
      </a>
      <!-- Divider -->
      <div style="padding-bottom: 40px;"></div>
     
      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a style="color: white; text-align: center; padding-right: 30px;" class="nav-link" href="index.php?pages=home-admin">
          <span><strong>Beranda</strong></span>
        </a>
      </li>
      <!-- Divider -->
      <hr style="border-color: white" class="sidebar-divider my-0">
 
		 <!-- Heading -->
      <li class="nav-item active">
        <a style="color: white; text-align: center;" class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#perekapan" aria-expanded="true" aria-controls="perekapan">
          <span><strong>Pembukuan</strong></span>
        </a>
        <div id="perekapan" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="index.php?pages=jurnalumum">Jurnal Umum</a>
            <a class="collapse-item" href="index.php?pages=bukubesar">Buku Besar</a>      
            <a class="collapse-item" href="index.php?pages=neracasaldo">Neraca Saldo</a>
          </div>
        </div>
      </li>

      <hr style="border-color: white" class="sidebar-divider my-0">

      <!-- Heading -->
      <li class="nav-item active">
        <a style="color: white; text-align: center;" class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <span><strong>Laporan</strong></span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="index.php?pages=laporan-labarugi">Laba Rugi</a>
            <a class="collapse-item" href="index.php?pages=laporan-neraca">Neraca</a>
            <a class="collapse-item" href="index.php?pages=laporan-perubmodal">Perubahan Modal</a>
            
          </div>
        </div>
      </li>

      <hr style="border-color: white" class="sidebar-divider my-0">
      <!-- Heading -->
      <li class="nav-item active">
        <a style="color: white; text-align: center;" class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <span><strong>Data Master</strong></span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="index.php?pages=akun">Data Akun</a>
            <a class="collapse-item" href="index.php?pages=managemen-user">Data User</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr style="border-color: white" class="sidebar-divider my-0">
      <li class="nav-item active">
        <a  class="nav-link" style="cursor:pointer; color: white; text-align: center; padding-right: 30px;" onclick="if(confirm('Apakah anda yakin keluar dari sistem ?')){window.location.href='login.php'}">
          <span><strong>Logout</strong></span></a>
      </li>
	  
<?php } ?>