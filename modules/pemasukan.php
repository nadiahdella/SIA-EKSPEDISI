  <?php
include "config/koneksi.php";
if(isset($_GET['username'])){
$query = mysqli_query ($conn,"Select * FROM user where username='$_GET[username]'") or die (mysql_error());
$result_edit = mysqli_fetch_array($query);
}
?>
      <!-- Static Table Start -->
      <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 style="color: #87B1FD" class="m-0 font-weight-bold">DATA PEMASUKAN</h6>
            </div>
            
           <div class="card-body">
              <div style="padding-bottom: 20px; text-align: right">
               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1">Tambah Data</button>
              </div>
              <div  class="table-responsive">
			  <table class="table table-bordered" id="dataTable" data-toggle="table" data-pagination="true" data-search="true">			
                        <thead>
                            <tr>
                            <th data-field="no" data-editable="true">No</th>
                                <th data-field="tanggal" data-editable="true">Tanggal</th>
                                <th data-field="id_transaksi" data-editable="true">No Transaksi</th>
                                <th data-field="nm_pengirim" data-editable="true">Nama Pengirim</th>
                                <th data-field="telp_pengirim" data-editable="true">No Telp Pengirim</th>
                                <th data-field="nm_penerima" data-editable="true">Nama Penerima</th>
                                <th data-field="telp_penerima" data-editable="true">No Telp Penerima</th>
                                <th data-field="alamat" data-editable="true">Alamat</th>
                                <th data-field="nm_brg" data-editable="true">Nama Barang</th>
                                <th data-field="total" data-editable="true">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $no = 1;
                            $query	= mysqli_query($conn,"SELECT * FROM pemasukan");
                                while ($hasil = mysqli_fetch_array($query)) 
                                    
                                { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $hasil['tanggal'];?></td>
                                    <td><?php echo $hasil['id_pemasukan'];?></td>
                                    <td><?php echo $hasil['nm_pengirim'];?></td>
                                    <td><?php echo $hasil['telp_pengirim'];?></td>
                                    <td><?php echo $hasil['nm_penerima'];?></td>
                                    <td><?php echo $hasil['telp_penerima'];?></td>
                                    <td><?php echo $hasil['alamat'];?></td>
                                    <td><?php echo $hasil['nm_brg'];?></td>
                                    <td>
                                    <?php echo "Rp. ".number_format($hasil['total'],2,',','.')."";?></td>
                                    <!--klo mau muncul 'show entries' nya hapus tombol cetak-->
                                    <td>
                                        <a href="modules/cetak_pemasukan.php?id_pemasukan=<?php echo $hasil['id_pemasukan'];?>"  target="_blank"><button class="btn btn-success" value="Cetak">Cetak</button></a>
                                    </td>
                                </tr>
                                    <!--"index1.php?pages=data-user-tambah&status=edit&username=-->
                                    
                                    
                                    <!--<a onclick="javascript:document.getElementById('mymodal').src='index.php?pages=data-user&username=" class="xcrud-action btn btn-info btn-sm" title="Edit"  data-toggle="modal" data-target="#myModal">
                                        <i class="mdi mdi-information"></i> EDIT
                                    </a> -->
                        
                            <?php }?>
                        </tbody>
                    </table> 
              </div>
            </div>
          </div>
        
		
		<?php
include "config/koneksi.php";
if(isset($_GET['username'])){
$query = mysqli_query ($conn,"Select * FROM user where username='$_GET[username]'");
$result_edit = mysqli_fetch_array($query);
}
$sql = "SELECT max(id_jurnal) FROM jurnal_umum";
$query = mysqli_query($conn, $sql);
$transaksi = mysqli_fetch_array($query);

if ($transaksi) {
    $nilai = substr($transaksi[0], 1);
    $kode = (int)$nilai;

    //tambahkan sebanyak + 1
    $kode = $kode + 1;
    $auto_kode = str_pad($kode, 5, "0",  STR_PAD_LEFT);
} else {
    $auto_kode = "00001";
}
?>
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="modal fade" id="myModal1" role="dialog">
                              <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                   
                                    <h4 class="modal-title">Tambah Data</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">
										<form action="index.php?pages=crud&aksi=tambah-pemasukan-kuliah" method="POST" enctype="multipart/form-data">
											
                                            <div class="form-group">
                                                <label class="control-label" for="">No Transaksi</label>
                                                <input type="text" readonly name="id_transaksi" class="form-control" placeholder="auto" id="id_transaksi" value="<?php echo $auto_kode; ?>/JU/IV/2020" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="">Tanggal</label>
                                                <input type="date" name="tanggal" class="form-control" id=""  required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="">Nama Pengirim</label>
                                                <input type="text" name="nm_pengirim" class="form-control" id="" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="">Telp Pengirim</label>
                                                <input type="text" name="telp_pengirim" class="form-control" id="" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="">Nama Penerima</label>
                                                <input type="text" name="nm_penerima" class="form-control" id="" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="">Telp Penerima</label>
                                                <input type="text" name="telp_penerima" class="form-control" id="" required>
                                            </div> 
                                            <div class="form-group">
                                                <label class="control-label" for="">Alamat</label>
                                                <input type="text" name="alamat" class="form-control" id="" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="">Nama Barang</label>
                                                <input type="text" name="nm_brg" class="form-control" id="" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="">Total</label>
                                                <input type="number" name="total" class="form-control" id="" required>
                                            </div>
											<div class="form-group">
                                                <label class="control-label" for="">Keterangan</label>
                                                <textarea name="keterangan" class="form-control"></textarea>
                                            </div>

                                            <div class="form-group">                                         
                                            <div class="modal-footer">
                                             <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                                    <button type="submit" class="btn btn-success" name="tambah">Simpan</button>
                                                </div>
                                            </div>
                                            </form>
                                            
                                  </div>
                                </div>
                            </div>
                        </div>
                           
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        