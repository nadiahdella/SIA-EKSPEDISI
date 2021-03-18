<?php
include "config/koneksi.php";
if(isset($_GET['username'])){
$query = mysqli_query ($conn,"Select * FROM user where username='$_GET[username]'") or die (mysql_error());
$result_edit = mysqli_fetch_array($query);
}

?>

<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 style="color: #87B1FD" class="m-0 font-weight-bold text-primary">LAPORAN PERUBAHAN MODAL</h6>
            </div>
            
           <div class="card-body">
		   <div class="body table-responsive">


<table class="table table-bordered table-striped table-hover dataTable js-exportable" width="100%">	
							<tr>
								<th class="left">Modal</th>
								<th class="right">
									<?php
									$modal = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM modal"));
										echo "Rp. ".number_format($modal['total'],2,',','.')."";
									?>
								</th>
							</tr>
							<tr>						
								<td class="left">
									Laba Bersih
								</td>
								<td class="right">
								<?php
									$labaK = mysqli_query($conn,"
											SELECT SUM(jurnal_umum.kredit) AS labaK,
											jurnal_umum.tanggal
											FROM jurnal_umum INNER JOIN akun ON jurnal_umum.kode_akun=akun.kode_akun 
											WHERE jurnal_umum.tanggal AND akun.laba_rugi ='T'
										");
									$lbK = mysqli_fetch_array($labaK);

									$labaD = mysqli_query($conn,"
											SELECT SUM(jurnal_umum.debit) AS labaD,
											jurnal_umum.tanggal
											FROM jurnal_umum INNER JOIN akun ON jurnal_umum.kode_akun=akun.kode_akun 
											WHERE jurnal_umum.tanggal AND akun.laba_rugi ='B'
										");
									$lbD = mysqli_fetch_array($labaD);

									$total_laba = $lbK['labaK']-$lbD['labaD'];

									// $total_debit  = $lb['jml_debit'];
									// $total_kredit = $lb['jml_kredit'];
									// $total_laba   = $total_debit+$total_kredit;

									echo "Rp. ".number_format($total_laba,2,',','.')."";
								?>
								</td>
							</tr>
							<tr>						
								<td class="left">
									Prive Owner
								</td>
								<td class="right">
									<?php
									$prive = mysqli_fetch_array(mysqli_query($conn,"SELECT SUM(total) AS total_prive FROM prive"));
										echo "- Rp. ".number_format($prive['total_prive'],2,',','.')."";
									?>
								</td>
							</tr>
							<?php 
								$total = ($modal['total']+$total_laba)-$prive['total_prive'];
								// }
							?>
							<tr>						
								<td colspan="2">&nbsp;</td>
							</tr>
							<tr>						
								<th class="left">
									Modal Sekarang
								</th>
								<th class="right">
									<?php echo "Rp. ".number_format($total,2,',','.').""; ?>
								</th>
							</tr>
				</table>
              </div>
            </div>
          </div>

