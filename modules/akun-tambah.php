<?php
include"config/koneksi.php";

if(isset($_GET['kode_akun'])){
$query = mysqli_query ($conn,"Select * FROM akun where kode_akun='$_GET[kode_akun]'") or die (mysqli_error());
$result_edit = mysqli_fetch_array($query);
}
?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 style="color: #87B1FD" class="m-0 font-weight-bold text-primary"></h6>
    </div>
    
   	<div class="card-body">
		<div class="tambah">
			<form action="index.php?pages=akun-proses" method="POST" enctype="multipart/form-data">
				<?php
					if(isset($_GET['kode_akun'])){
						echo "<input type='hidden' name='status' value='edit'>";
					}else {
						echo "<input type='hidden' name='status' value='add'>";
					}
				?>

				<h2 align="center" style="padding-bottom: 20px;"><?php if(isset($_GET['kode_akun'])){ echo"Edit Data Akun";} else {echo"Tambah Data Akun";}  ?></h2>

				<table align="center">
					<input type="hidden" name="txtid" value="<?php if(isset($result_edit['kode_akun'])) echo $result_edit['kode_akun'] ?>">
						<tr>
							<td><label>Kode akun</label></td>
							<td style="padding-left: 10px;">:</td>
							<td><input style="margin-left: 20px" type="number" class="form-control" name="txtakun" value="<?php if(isset($result_edit['kode_akun'])) echo $result_edit['kode_akun']; ?>" checked></td>
						</tr>
						<tr>
							<td><label>Nama akun</label></td>
							<td style="padding-left: 10px;">:</td>
							<td><input style="margin-left: 20px" type="text" class="form-control" name="txtnama" value="<?php if(isset($result_edit['nama_akun'])) echo $result_edit['nama_akun']; ?>"></td>
						</tr>
						
						<tr>
							<td><label>Posisi</label></td>
							<td style="padding-left: 10px;">:</td>
							<td><select style="margin-left: 20px" class="form-control"id="posisi" name="posisi" >
									<option value="<?php if(isset($result_edit['laba_rugi'])) {echo $result_edit['laba_rugi'];}else {echo "";} ?>"><?php if(isset($result_edit['posisi'])) {echo $result_edit['posisi'];}else {echo "Pilih Posisi";} ?></option>
									<option value="L">Debit</option>
									<option value="R">Kredit</option>
								</select>
							</td>
						</tr>

						<tr>
							<td><label>Laba Rugi</label></td>
							<td style="padding-left: 10px;">:</td>
							<td><select style="margin-left: 20px" class="form-control"id="labarugi" name="labarugi" >
									<option value="<?php if(isset($result_edit['laba_rugi'])) echo $result_edit['laba_rugi']; ?>"><?php if(isset($result_edit['laba_rugi'])) {echo $result_edit['laba_rugi'];}else {echo "Pilih Laba Rugi";} ?></option>
									<option value="N">N</option>
									<option value="T">T</option>
									<option value="B">B</option>
								</select>
							</td>
						</tr>

						<tr>
							<td><label>Posisi Modal</label></td>
							<td style="padding-left: 10px;">:</td>
							<td><select style="margin-left: 20px" class="form-control"id="posisimodal" name="posisimodal" >
									<option  value="<?php if(isset($result_edit['pm'])) echo $result_edit['pm']; ?>"><?php if(isset($result_edit['pm'])) {echo $result_edit['pm'];}else {echo "Pilih Posisi Modal";} ?></option>
									<option value="0">0</option>
									<option value="1">1</option>
								</select>
							</td>
						</tr>

						<tr>
							<td><label>Grup</label></td>
							<td style="padding-left: 10px;">:</td>
							<td><select style="margin-left: 20px" class="form-control" id="grup" name="grup" >
									<option  value="<?php if(isset($result_edit['grup'])) echo $result_edit['grup']; ?>"><?php if(isset($result_edit['grup'])) {echo $result_edit['grup'];}else {echo "Pilih Grup";} ?></option>
									<option value="Debit">Debit</option>
									<option value="Kredit">Kredit</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><br></td>
						</tr>
						<tr align="center">
							<td colspan="2"><button class="btn btn-success"> <?php if(isset($_GET['kode_akun'])){ echo"Edit ";} else {echo"Tambah";} ?> </button></td>
							<td ><a class="btn btn-success" href="index.php?pages=akun">Kembali</button></td>
						</tr>
				</table>
			</form>
		</div>
   	</div>
</div>