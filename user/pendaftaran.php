
<?php 
include 'index.php';
?>


    <br> 

   <h5>&nbsp;  DATA KENDARAAN</h5>
    <?php
            if (isset($_POST ['pendaftaran'])) {
                include 'koneksi.php';
                $insert = mysqli_query($conn, "INSERT INTO pendaftaran values
                    (NULL,
                        '" .$_POST['no_kendaraan']."',
                        '" .$_POST['no_stnk']."',
                        '" .$_POST['no_mesin']."',                        
                        '" .$_POST['no_rangka']."',
                        '" .$_POST['merk_kend']."',
                        '" .$_POST['jenis_kend']."',
                        '" .$_POST['tahun_kend']."',
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
    
    <div class="col-sm-3">
      <input type="text" class="form-control" name="no_kendaraan" placeholder="No Kendaraan">
    </div>
  </div>

    <div class="form-group row">
    
    <div class="col-sm-3">
      <input type="text" class="form-control" name="no_stnk" placeholder="STNK">
    </div>
  </div>

  <div class="form-group row">
    
    <div class="col-sm-3">
      <input type="text" class="form-control" name="no_mesin" placeholder="No Mesin">
    </div>
  </div>

  <div class="form-group row">
    
    <div class="col-sm-3">
      <input type="text" class="form-control" name="no_rangka" placeholder="No Rangka">
    </div>
  </div>
  
  <div class="form-group row">  
    
        <div class="col-sm-3">
      <input type="text" class="form-control" name="merk_kend" placeholder="Merk Kendaraan">
    </div>
</div >

  <div class="form-group row">
    
    <div class="col-sm-3">
      <input type="text" class="form-control" name="jenis_kend" placeholder="Jenis Kendaraan">
    </div>
  </div>

  <div class="form-group row">
    
    <div class="col-sm-3">
      <input type="number" class="form-control" name="tahun_kend" placeholder="Tahun Kendaraan">
    </div>
  </div>

   <div class="form-group row">
    
    <div class="col-sm-3">
      <input type="date" class="form-control" name="tgl_pendaftaran" placeholder="Tanggal">
    </div>
  </div>
  

<div align="text-center">
     <input type="submit" class="btn btn-success" name="pendaftaran" value="Daftar" />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset" name="reset">
  </div>

</form>



</div>

  
  
  
 <?php 
include 'footer.php';
?>

