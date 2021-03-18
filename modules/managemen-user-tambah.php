<?php
include "config/koneksi.php";

if(isset($_GET['usernames'])){
$query = mysqli_query ($conn,"Select * FROM user where usernames='$_GET[usernames]'") or die (mysqli_error());
$result_edit = mysqli_fetch_array($query);
}
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 style="color: #87B1FD" class="m-0 font-weight-bold text-primary"></h6>
    </div>
    
   	<div class="card-body">
		<div class="tambah">
			<form action="index.php?pages=managemen-user-proses" method="POST" enctype="multipart/form-data">
			<?php
				if(isset($_GET['usernames'])){
					echo "<input type='hidden' name='status' value='edit'>";
				}else {
					echo "<input type='hidden' name='status' value='add'>";
				}
			?>
				<h2 align="center" style="padding-bottom: 20px;"><?php if(isset($_GET['usernames'])){ echo"Edit Data User";} else {echo"Tambah Data User";}  ?></h2>

				<table align="center">

					<tr>
						<td><label>Nama Lengkap</label></td>
						<td style="padding-left: 10px;">:</td>
						<td><input style="margin-left: 20px" type="text" class="form-control" name="txtnama" placeholder="nama" value="<?php if(isset($result_edit['nama_user'])) echo $result_edit['nama_user'] ?>"></td>
					</tr>
					<tr>
						<td><label>Username</label></td>
						<td style="padding-left: 10px;">:</td>
						<td><input style="margin-left: 20px" type="text" class="form-control" name="txtuser" placeholder="username" value="<?php if(isset($result_edit['usernames'])) echo $result_edit['usernames'] ?>" required></td>
					</tr>
					
					<tr>
						<td><label>Password</label></td>
						<td style="padding-left: 10px;">:</td>
						<td><input style="margin-left: 20px" type="password" class="form-control" name="txtpass" placeholder="******" value="<?php if(isset($result_edit['passwords'])) echo $result_edit['passwords'] ?>" <?php if(isset($result_edit['passwords'])) echo "disabled"?>></td>
					</tr>
					
					<tr>
						<td><label>Level</label></td>
						<td style="padding-left: 10px;">:</td>
						<td ><input style="margin-left: 20px;" type="radio" name="txtlevel" value="1" checked>Super Admin
							 <input style="margin-left: 20px;"type="radio" name="txtlevel" value="3" <?php if(@$result_edit['level'] == '3') echo "checked"; ?>>Owner
						</td>
					</tr>
					
					<tr>
						<td><br></td>
					</tr>

					<tr align="center">
						<td colspan="2"><button class="btn btn-success"><?php if(isset($_GET['usernames'])){ echo"Edit ";} else {echo"Tambah";} ?></button></td>
						<td><a class="btn btn-success" href="index.php?pages=managemen-user">Kembali</button></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>