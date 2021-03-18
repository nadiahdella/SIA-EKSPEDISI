<?php
include "config/koneksi.php";
if(isset($_GET['username'])){
$query = mysqli_query ($conn,"Select * FROM user where username='$_GET[username]'") or die (mysql_error());
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
    $auto_kode =  str_pad($kode, 5, "0",  STR_PAD_LEFT);
} else {
    $auto_kode = "00001";
}
?>       
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 style="color: #87B1FD" class="m-0 font-weight-bold">DATA PENGELUARAN</h6>
            </div>
            
           <div class="card-body">
              <div style="padding-bottom: 20px; text-align: right">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Tambah Data</button>
              </div>
           
              <div class="table-responsive">
			  <table class="table table-bordered" id="dataTable" data-toggle="table" data-pagination="true" data-search="true" >									
                                       
                    <thead>
                        <tr>
                            <th data-field="no" data-editable="true">No</th>
                            <th data-field="tanggal" data-editable="true">Tanggal</th>
                            <th data-field="nm_pengeluaran" data-editable="true">Jenis Pengeluaran</th>
                            <th data-field="keterangan" data-editable="true">Keterangan</th>
                            <th data-field="total" data-editable="true">Total</th>
                            
                        </tr>
                    </thead>
                        
                    <tbody>
                    <?php
                        $no = 1;
                        $query	= mysqli_query($conn,"SELECT * FROM pengeluaran");
                            while ($hasil = mysqli_fetch_array($query)) 
                                
                            { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $hasil['tanggal'];?></td>
                                <td><?php echo $hasil['nm_pengeluaran'];?></td>
                                <td><?php echo $hasil['keterangan'];?></td>
                                
                                <td> <?php echo "Rp. ".number_format($hasil['total'],2,',','.')."";?></td>
                                </tr>
                        <?php }?>
                    </tbody>
                </table> 
              </div>
            </div>
          </div>
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                           <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                              <div class="modal-dialog">
                              
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                   
                                    <h4 class="modal-title">Tambah Data</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  </div>
                                  <div class="modal-body">
										<form action="<?php echo $base_url?>index.php?pages=crud&aksi=tambah-pengeluaran" method="POST" enctype="multipart/form-data">
                                            
                                            <div class="form-group">
                                                <label class="control-label" for="">No Transaksi</label>
                                                <input type="text" readonly name="no_transaksi" class="form-control" placeholder="auto" id=""  value="<?php echo $auto_kode; ?>/JU/IV/2020" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="">Tanggal</label>
                                                <input type="date" name="tanggal" class="form-control" id="" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="">Kode Akun</label>
                                                
                                                <select class="form-control" id="kode_akun" name="kode_akun"  required>
                                                <option  value="">Pilih</option>
                                                <?php
                                                $query=mysqli_query($conn,"SELECT*FROM akun WHERE kode_akun IN (13,14)");
                                                
                                                while($hasil=mysqli_fetch_array($query)){
                                                    echo "<option value='$hasil[kode_akun]'>$hasil[kode_akun]|$hasil[nama_akun]</option>";
                                                   
                                                }
                                            
                                                ?>
                                                                                                                
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label" for="">Jenis Pengeluaran</label>
                                                <select class="form-control"id="nm_pengeluaran" name="nm_pengeluaran" >
                                                <option  value="">Pilih</option>
                                
                                                <option value="Perlengkapan">Perlengkapan</option>
												<option value="Peralatan">Peralatan</option>
												</select>
                                            </div>
                                            
											<div class="form-group">
                                                <label class="control-label" for="">Keterangan</label>
                                                <textarea name="keterangan" class="form-control"></textarea>
                                            </div>
											
                                            <div class="form-group">
                                                <label class="control-label" for="">Total</label>
                                                <input type="number" name="total" class="form-control" id="" required>
                                            </div>
                                            
                                                                                                                    
                                            </select>
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
        