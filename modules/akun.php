  <?php
include "config/koneksi.php";
if(isset($_GET['id_akun'])){
$query = mysqli_query ($conn,"Select * FROM akun where id_akun='$_GET[id_akun]'") or die (mysql_error());
$result_edit = mysqli_fetch_array($query);
}
?>
      <!-- Static Table Start -->
      <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 style="color: #87B1FD" class="m-0 font-weight-bold text-primary">DATA AKUN</h6>
            </div>
            
           <div class="card-body">
            <div style="padding-bottom: 20px; text-align: right">
                <a href="index.php?pages=akun-tambah" class="btn btn-success" role="button">Tambah Data</a>
            </div>
              <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" data-toggle="table" data-pagination="true" data-search="true" >
                  <thead align="center">
                    <tr>
                      <th>No</th>
                      <th>Kode Akun</th>
                      <th>Nama Akun</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                        $no = 1;
                        $query	= mysqli_query($conn,"SELECT * FROM akun");
                            while ($hasil = mysqli_fetch_array($query))    
                            { ?>    
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $hasil['kode_akun'];?></td>
                            <td><?php echo $hasil['nama_akun'];?></td>
    				                <td align="center">
                                <a class='btn btn-primary' href="index.php?pages=akun-tambah&status=edit&kode_akun=<?php echo $hasil['kode_akun'];?>">Edit</a>
                                <a href='#' style='color:#fff;' class='btn btn-danger' onclick="if(confirm('Apakah yakin menghapus data ?')){window.location.href='index.php?pages=akun-proses&status=delete&kode_akun=<?php echo $hasil['kode_akun'];?>'}">Hapus</a>
                            </td>
                          </tr>  

                    <?php }?>							 
                  </tbody>         
                </table>
              </div>
            </div>
          </div>