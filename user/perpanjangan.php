<?php 
include 'index.php';
?>


<br>
  <h5>&nbsp; ISI DATA KENDARAAN</h5>

  <?php
            if (isset($_POST ['perpanjangan'])) {
                include 'koneksi.php';
                $insert = mysqli_query($conn, "INSERT INTO perpanjangan values
                    (NULL,
                        '" .$_POST['no_uji']."',
                        '" .$_POST['no_bukuuji']."',
                        '" .$_POST['no_kendaraan']."',                        
                        '" .$_POST['no_mesin']."',                                                                        
                        '" .$_POST['jenis_kendaraan']."',                       
                        '" .$_POST['tgl_pendaftaran']."')");

                if ($insert) {
                     echo "<div class='alert alert-primary'>Terimakasih Sudah Mendaftar !! </div>";
                    # code...
                } else {
                    die() ;
                }

            }

        ?>
<br>
<form action="" method="POST"  class="col-sm-8">
  
    <div class="form-group row">
    
    <div class="col-sm-5">
      <input type="text" class="form-control" name="no_uji" placeholder="NO UJI">
    </div>
  </div>

<div class="form-group row">

    <div class="col-sm-5">
      <input type="text" class="form-control" name="no_bukuuji" placeholder="Buku Uji">
    </div>
  </div>

  <div class="form-group row">
    
    <div class="col-sm-5">
      <input type="text" class="form-control" name="no_kendaraan" placeholder="No Kendaraan">
    </div>
  </div>

  <div class="form-group row">
    
    <div class="col-sm-5">
      <input type="text" class="form-control" name="no_mesin" placeholder="No Mesin">
    </div>
  </div>

  <div class="form-group row">
    
    <div class="col-sm-5">
      <input type="text" class="form-control" name="jenis_kendaraan" placeholder="Jenis Kendaraan">
    </div>
  </div>

   <div class="form-group row">
   
    <div class="col-sm-5">
      <input type="date" class="form-control" name="tgl_pendaftaran" placeholder="Tanggal pemeriksaan">
    </div>
  </div>

  

<div align="text-center">
    <input type="submit" class="btn btn-success" name="perpanjangan" value="Daftar" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset" name="reset">
  </div>
</form>


  
 
<?php 
include 'footer.php';
?>
