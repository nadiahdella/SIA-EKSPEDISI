 <?php
 include "../config/koneksi.php";
  $id = $_GET['id_pemasukan'];
  $query	= mysqli_query($conn,"SELECT * FROM pemasukan where id_pemasukan = '$id'");
      while ($hasil = mysqli_fetch_array($query)) 
          
          {
              $total = $hasil['total'];
 ?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cetak Transaksi</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 10px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="../resources/a.png" style="width:100%; max-width:150px; ">
                            </td>
                            
                            <td>
                                <br>
                                Kwitansi #: <?php echo $hasil['id_pemasukan'];?><br>
                                Tanggal: <?php echo $hasil['tanggal'];?><br>

                            </td>
                        </tr>
                        <tr>
                            
                            <td>
                                Jasa Pengiriman Ciba Titipan<br>
                                Head Office :<br>
                                Jl. Thamrin - Krembangan I/26 <br>
                                Sidoarjo, Jawa Timur 
                            </td>
                            <td></td>
                            
                        </tr>
                        
                           
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        
                        <tr>
                            <td>
                                <b>Data Pengirim</b> <br>
                                <?php echo $hasil['nm_pengirim'];?>
                                <?php echo $hasil['telp_pengirim'];?>
                            </td>
                            <td>
                                <b>Data Penerima</b> <br>
                                <?php echo $hasil['nm_penerima'];?><br>
                                <?php echo $hasil['telp_penerima'];?>
                                <?php echo $hasil['alamat'];?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Keterangan
                </td>

                <td>
                    Total Biaya
                </td>
            </tr>
            
            <tr class="details">
                <td>
                   Deskrisi Barang :<br>
                   <?php echo $hasil['nm_brg'];?>
                </td>

                <td>
                <b><?php echo "Rp. ".number_format($total,2,',','.')."";?></b>
                </td>
            </tr>                                     
        </table>
<?php }?>
    </div>

</body>
</html>
<script>
    window.print();
</script>
 