<?php
$ambil=$_GET['aksi'];
if($ambil=="tambah-user")
{
    $status = @$_POST['status'];
    $user 	= @$_POST['txtuser'];
    $email 	= @$_POST['txtemail'];
    $pass	= @$_POST['txtpass'];
    $nama	= @$_POST['txtnama'];
    $level	= @$_POST['txtlevel'];

    $tambah	= mysqli_query ($conn,"INSERT INTO user VALUES ('$nama','$email','$user','$pass','$level')")or die (mysqli_error());
		if ($tambah=true){
            echo"<script>alert('Tambah Data Berhasil');</script>";
            echo '<meta http-equiv="Refresh" content="0; url=index.php?pages=data-user"/>';
		}else {
			echo"<script>alert('Tambah Data Tidak Berhasil');</script>";
		}
} 
else if($ambil=="edit-user")
{
    $status = @$_POST['status'];
    $user 	= @$_POST['txtuser'];
    $email 	= @$_POST['txtemail'];
    $pass	= @$_POST['txtpass'];
    $nama	= @$_POST['txtnama'];
    $level	= @$_POST['txtlevel'];

    $edit	= "UPDATE user SET Username='$user',Password='$pass',Email='$email', Nama='$nama',Level='$level'";
		$edit .="WHERE Username='$user'";
		$edit	= mysqli_query($conn,$edit) or die (mysqli_error());
		if ($edit=true){
            echo"<script>alert('Update Data Berhasil');</script>";
            echo '<meta http-equiv="Refresh" content="0; url=index.php?pages=data-user"/>';

		}else {
			echo"<script>alert('Update Data Tidak Berhasil');</script>";
		}
}
else if($ambil=="hapus-user")
{
    $status = @$_POST['status'];
    $user 	= @$_POST['txtuser'];
    $email 	= @$_POST['txtemail'];
    $pass	= @$_POST['txtpass'];
    $nama	= @$_POST['txtnama'];
    $level	= @$_POST['txtlevel'];

    $id =$_GET['username'];
	$tambah	= mysqli_query ($conn,"DELETE FROM user WHERE Username ='$id'")or die (mysql_error());
		if ($tambah=true){
            echo"<script>alert('Delete Data Berhasil');</script>";
            echo '<meta http-equiv="Refresh" content="0; url=index.php?pages=data-user"/>';
		}else {
			echo"<script>alert('Delete Data Tidak Berhasil');</script>";
		}
    }
else if($ambil=="tambah-akun")
{
    $status = @$_POST['status'];
    $id_akun = @$_POST['id_akun'];
    $nama_akun 	= @$_POST['nama_akun'];



    $tambah	= mysqli_query ($conn,"INSERT INTO akun VALUES ('$id_akun','$nama_akun')")or die (mysqli_error());
		if ($tambah=true){
            echo"<script>alert('Tambah Data Berhasil');</script>";
            echo '<meta http-equiv="Refresh" content="0; url=index.php?pages=data-akun"/>';
		}else {
			echo"<script>alert('Tambah Data Tidak Berhasil');</script>";
		}
} 
else if($ambil=="hapus-akun")
{
    $status = @$_POST['status'];
    $id_akun = @$_POST['id_akun'];
    $nama_akun 	= @$_POST['nama_akun'];


    $id_akun =$_GET['id_akun'];
    $tambah	= mysqli_query ($conn,"DELETE FROM akun WHERE id_akun ='$id_akun'")or die (mysql_error());
		if ($tambah=true){
            echo"<script>alert('hapus akun Berhasil');</script>";
            echo '<meta http-equiv="Refresh" content="0; url=index.php?pages=data-akun"/>';
		}else {
			echo"<script>alert('Hapus akun Tidak Berhasil');</script>";
		}
} 
else if($ambil=="edit-akun")
{
      $status = @$_POST['status'];
      $id_akun = @$_POST['id_akun'];
      $nama_akun 	= @$_POST['nama_akun'];


    $edit	= "UPDATE akun SET id_akun='$id_akun',nama_akun='$nama_akun'";
		$edit .="WHERE id_akun='$id_akun'";
		$edit	= mysqli_query($conn,$edit) or die (mysqli_error());
		if ($edit=true){
            echo"<script>alert('Update Data Berhasil');</script>";
            echo '<meta http-equiv="Refresh" content="0; url=index.php?pages=data-akun"/>';

		}else {
			echo"<script>alert('Update Data Tidak Berhasil');</script>";
		}
}
else if($ambil=="tambah-beban") //DONE
{
    $status = @$_POST['status'];
    $tanggal = @$_POST['tanggal'];
    $id_beban = @$_POST['id_beban'];
    $kode_akun	= @$_POST['kode_akun'];
    $nama_beban=@$_POST['nama_beban'];
    $total	= @$_POST['total'];
    $keterangan=@$_POST['keterangan'];
    $no_transaksi=@$_POST['no_transaksi'];

    

    $tambah	= mysqli_query ($conn,"INSERT INTO beban VALUES ('','$tanggal','$kode_akun','$nama_beban','$total','$keterangan','$no_transaksi')")or die (mysqli_error());
  
    $tambah1=mysqli_query ($conn,"INSERT INTO jurnal_umum VALUES ('','$no_transaksi','$kode_akun','$nama_beban','$keterangan','$tanggal','$total','0')")or die (mysqli_error());
    $tambah2=mysqli_query ($conn,"INSERT INTO jurnal_umum VALUES ('','$no_transaksi','11','$nama_beban','$keterangan','$tanggal','0','$total')")or die (mysqli_error());
    

    if ($tambah=true AND $tambah1=true AND $tambah2=true){
    echo"<script>alert('Tambah Data Berhasil');</script>";
    echo "<meta http-equiv='Refresh' content='0; url=index.php?pages=beban'/>";
    }else {
          echo"<script>alert('Tambah Data Tidak Berhasil');</script>";
    }
} 

else if($ambil=="tambah-pengeluaran") //DONE
{
    $status = @$_POST['status'];
    $tanggal = @$_POST['tanggal'];
    $id_pengeluaran = @$_POST['id_pengeluaran'];
    $kode_akun	= @$_POST['kode_akun'];
    $nm_pengeluaran =@$_POST['nm_pengeluaran'];
    $total	= @$_POST['total'];
    $keterangan=@$_POST['keterangan'];
    $no_transaksi=@$_POST['no_transaksi'];


    $tambah	= mysqli_query ($conn,"INSERT INTO pengeluaran VALUES ('$id_pengeluaran','$tanggal','$nm_pengeluaran','$total','$keterangan')");

    $tambah1=mysqli_query ($conn,"INSERT INTO jurnal_umum VALUES ('','$no_transaksi','$kode_akun','$nm_pengeluaran','$keterangan','$tanggal','$total','0')")or die (mysqli_error());
    $tambah2=mysqli_query ($conn,"INSERT INTO jurnal_umum VALUES ('','$no_transaksi','11','$nm_pengeluaran','$keterangan','$tanggal','0','$total')")or die (mysqli_error());
    
    if ($tambah=true AND $tambah1=true AND $tambah2=true){
    echo"<script>alert('Tambah Data Berhasil');</script>";
    echo "<meta http-equiv='Refresh' content='0; url=index.php?pages=pengeluaran'/>";
    }else {
          echo"<script>alert('Tambah Data Tidak Berhasil');</script>";
    }
} 
else if($ambil=="tambah-pemasukan")
{
      $tanggal=@$_POST['tanggal'];
      $program =@$_POST['program'];
      $kodeakun =@$_POST['id_transaksi'];
      $keterangan = @$_POST['keterangan'];
      $siswa	=@$_POST['siswa'];
      $kelas	=@$_POST['kelas'];
	  $a1 = mysqli_query($conn,"SELECT * from program where id_program='$program'");
	  $har = mysqli_fetch_array($a1);
      $harga = $har['harga_program'];

    $tambah	= mysqli_query($conn,"INSERT INTO pemasukan VALUES ('$kodeakun','$tanggal','$siswa','$program','$kelas','$harga')");
      $tambah1=mysqli_query ($conn,"INSERT INTO jurnal_umum VALUES ('','$kodeakun','11','Pendapatan Bimbel','$keterangan','$tanggal','$harga','0')")or die (mysqli_error());
      $tambah2=mysqli_query ($conn,"INSERT INTO jurnal_umum VALUES ('','$kodeakun','41','Pendapatan Bimbel','$keterangan','$tanggal','0','$harga')")or die (mysqli_error());
      
    if ($tambah=true AND $tambah1=true AND $tambah2=true){
    echo"<script>alert('Tambah Data Berhasil');</script>";
    echo '<meta http-equiv="Refresh" content="0; url=index.php?pages=pemasukan"/>';
    }else {
          echo"<script>alert('Tambah Data Tidak Berhasil');</script>";
    }
} else if($ambil=="tambah-pemasukan-kuliah") //DONE
{
      $tanggal=@$_POST['tanggal'];
      $kodeakun =@$_POST['id_transaksi'];
      $nm_pengirim =@$_POST['nm_pengirim'];
      $telp_pengirim =@$_POST['telp_pengirim'];
      $nm_penerima =@$_POST['nm_penerima'];
      $telp_penerima =@$_POST['telp_penerima'];
      $alamat  =@$_POST['alamat'];
      $nm_brg  =@$_POST['nm_brg'];
      $keterangan = @$_POST['keterangan'];
      $total =@$_POST['total'];

    $tambah	= mysqli_query($conn,"INSERT INTO pemasukan VALUES ('$kodeakun','$tanggal','$nm_pengirim','$telp_pengirim','$nm_penerima','$telp_penerima','$alamat','$nm_brg','$total')");
      $tambah1=mysqli_query ($conn,"INSERT INTO jurnal_umum VALUES ('','$kodeakun','11','Pendapatan Jasa Pengiriman','$keterangan','$tanggal','$total','0')")or die (mysqli_error());
      $tambah2=mysqli_query ($conn,"INSERT INTO jurnal_umum VALUES ('','$kodeakun','41','Pendapatan Jasa Pengiriman','$keterangan','$tanggal','0','$total')")or die (mysqli_error());
      
    if ($tambah=true AND $tambah1=true AND $tambah2=true){
    echo"<script>alert('Tambah Data Berhasil');</script>";
    echo '<meta http-equiv="Refresh" content="0; url=index.php?pages=pemasukan"/>';
    }else {
          echo"<script>alert('Tambah Data Tidak Berhasil');</script>";
    }
} 
else if($ambil=="tambah-modal") //DONE
{
      $tanggal = @$_POST['tanggal'];
      $kode_akun = @$_POST['kode_akun'];
      $keterangan = @$_POST['keterangan'];  
      $total = @$_POST['total'];
      $no_transaksi = @$_POST['no_transaksi'];
    

    $tambah	= mysqli_query ($conn,"INSERT INTO modal VALUES ('','$tanggal','$kode_akun','$keterangan','$total','$no_transaksi')") or die (mysqli_error());
    $tambah1=mysqli_query ($conn,"INSERT INTO jurnal_umum VALUES ('','$no_transaksi','11','Setoran Modal','$keterangan','$tanggal','$total','0')")or die (mysqli_error());
    $tambah2=mysqli_query ($conn,"INSERT INTO jurnal_umum VALUES ('','$no_transaksi','$kode_akun','Setoran Modal','$keterangan','$tanggal','0','$total')")or die (mysqli_error());
    if ($tambah=true AND $tambah1=true AND $tambah2=true){
    echo"<script>alert('Tambah Data Berhasil');</script>";
    echo '<meta http-equiv="Refresh" content="0; url=index.php?pages=modal"/>';
    }else {
          echo"<script>alert('Tambah Data Tidak Berhasil');</script>";
    }
}  
else if($ambil=="tambah-prive") //DONE
{
    $status = @$_POST['status'];
    $tanggal = @$_POST['tanggal'];
    $kode_akun	= @$_POST['kode_akun'];
    $keterangan=@$_POST['keterangan'];
    $total	= @$_POST['total'];
    $no_transaksi=@$_POST['no_transaksi'];

    $tambah	= mysqli_query ($conn,"INSERT INTO prive VALUES ('','$kode_akun','$tanggal','$keterangan','$total','$no_transaksi')")or die (mysqli_error());

    $tambah1=mysqli_query ($conn,"INSERT INTO jurnal_umum VALUES ('','$no_transaksi','$kode_akun','Prive','$keterangan','$tanggal','$total','0')")or die (mysqli_error());
    $tambah2=mysqli_query ($conn,"INSERT INTO jurnal_umum VALUES ('','$no_transaksi','11','Prive','$keterangan','$tanggal','0','$total')")or die (mysqli_error());
    
    if ($tambah=true AND $tambah1=true AND $tambah2=true){
    echo"<script>alert('Tambah Data Berhasil');</script>";
    echo '<meta http-equiv="Refresh" content="0; url=index.php?pages=prive"/>';
    }else {
          echo"<script>alert('Tambah Data Tidak Berhasil');</script>";
    }
} 
?>
