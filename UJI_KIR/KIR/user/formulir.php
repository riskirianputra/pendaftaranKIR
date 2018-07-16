<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<body background="image/cream.jpg" style="background-color:#00ffff; >
    <div class="card text-center">
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">HOME <span class="sr-only">(current)</span></a>
      </li>
 &nbsp; &nbsp;
       <li class="nav-item active">
        <a class="nav-link" href="home.php">ABOUT <span class="sr-only">(current)</span></a>
      </li>
    &nbsp; &nbsp; &nbsp;
      
       <div class="btn-group">
        <button type="button" class="btn btn-light">INFORMASI</button>
        <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">        
        </button>

        <div class="dropdown-menu">
          <a class="dropdown-item" href="syarat.php">SYARAT PENDAFTARAN</a>
          <a class="dropdown-item" href="biaya.php">BIAYA</a>
        </div>
      </div>

      &nbsp; &nbsp; &nbsp;
    
     
    
    
    </ul>

    


    <div align="text-center">
    <b>HARI INI </b> 
    &nbsp;&nbsp;&nbsp; 
    <?php
echo date('d - M - Y');
?>
&nbsp;&nbsp;&nbsp;
    <a href="login.php" class="btn btn-primary"> LOGOUT </a>
  </div>
  </div>
</nav>
            
            
            
        

        <div class="row">
          <div class="col-sm-4" align="center"><img src="image/payakumbuh.png" width="50px;"></div>        
        <div class="row">
          <div class="col-sm-12" align="center"><H5><B> DINAS PERHUBUNGAN KOTA PAYAKUMBUH &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/dishub.jpg" width="50px;"></div>
        <div class="row">
          <div class="col-sm-2" ></div>
        </div>
        </div>
        </div>
        <b> <hr> </b>

    <table class="table table-bordered table-striped">
       
        <div class="row">
          <div class="col-sm-4">1. Nomor Kendaraan</div>        
        <div class="row">
          <div class="col-sm-1">:</div>
          <input type="text" name="nomor kendaraan">
        </div>
        </div>
<br>
        <div class="row">
          <div class="col-sm-4">2. Nama Pemilik </div>        
        <div class="row">
          <div class="col-sm-1">:</div>
          <input type="text" name="nama">
        </div>
        </div>
<br>        
        <div class="row">
          <div class="col-sm-4">3. Alamat Pemilik</div>        
        <div class="row">
          <div class="col-sm-1">:</div>
          <input type="text" name="alamat">
        </div>
        </div>
<br>
        <div class="row">
          <div class="col-sm-4">4. Jenis Kendaraan</div>        
        <div class="row">
          <div class="col-sm-1">:</div>
          <input type="text" name="jenis kendaraan">
        </div>
        </div>
<br>
        <div class="row">
          <div class="col-sm-4">5. Merk / Tahun / Kendaraan</div>        
        <div class="row">
          <div class="col-sm-1">:</div>
          <input type="text" name="merk">
        </div>
        </div>
<br>
        <div class="row">
          <div class="col-sm-4">6. Nomor Mesin</div>        
        <div class="row">
          <div class="col-sm-1">:</div>
          <input type="text" name="nomor mesin">
        </div>
        </div>
<br>
        <div class="row">
          <div class="col-sm-4">7. Nomor Pemeriksaan</div>        
        <div class="row">
          <div class="col-sm-1">:</div>
          <input type="text" name="nomor pemeriksaan">
        </div>
        </div>
<br>
        <div class="row">
          <div class="col-sm-4">8. Tanggal tak berlaku tanda pengesahan</div>        
        <div class="row">
          <div class="col-sm-1">:</div>
          <input type="date" name="Tanggal">
        </div>
        </div>
</table>
<br>
<br>
  <table class="table table-bordered table-striped">
    <div class="row">
      <div class="col-sm-8">
        &nbsp;    
      </div>                          
      <div class="row">
      <div class="col-sm-12">
       Payakumbuh..............................................................
      </div>
    </div>
    </div>
    

     <div class="row">
      <div class="col-sm-9">
        <h3><b>TIDAK MERUPAKAN <BR> IZIN JALAN</BR></b></h3>
      </div>
    <div class="row">
      <div class="col-sm-11">
     <h9>PEMOHON</h9>
      </div>
    </div>
    </div>

    <div class="row">
      <div class="col-sm-10">
        <h3></h3>
      </div>
    <div class="row">
      <div class="col-sm-3">
       <h9></h9>
      </div>
    </div>
    </div>

    <div class="row">
      <div class="col-sm-10">
        <h3></h3>
      </div>
    <div class="row">
      <div class="col-sm-3">
       <h9></h9>
      </div>
    </div>
    </div>

    <div class="row">
      <div class="col-sm-10">
        <h3></h3>
      </div>
    <div class="row">
      <div class="col-sm-3">
       <h9></h9>
      </div>
    </div>
    </div>

    <div class="row">
      <div class="col-sm-10">
        <h3></h3>
      </div>
    <div class="row">
      <div class="col-sm-3">
       <h9></h9>
      </div>
    </div>
    </div>

     <div class="row">
      <div class="col-sm-8">
        <h3></h3>
      </div>
    <div class="row">
      <div class="col-sm-10">
       <h9>(........................................................................................)</h9>
      </div>
    </div>
    </div>
    
  </table>

        <br>
    
    <br>
    <br>
    <hr>
<div align="center">
    <a href="pendaftaran.php" class="btn btn-primary"> LANJUT </a>
    <a href="pendaftaran.php" class="btn btn-primary"> CETAK </a>

    </div>

    <div align="center">
    
    </div>
</body>
</html>


