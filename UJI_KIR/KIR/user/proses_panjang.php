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
    
      <div class="btn-group">
        <button type="button" class="btn btn-light">PENDAFTARAN</button>
        <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">        
        </button>

        <div class="dropdown-menu">
          <a class="dropdown-item" href="pendaftaran.php">DAFTAR BARU</a>
          <a class="dropdown-item" href="perpanjangan.php">PERPANJANGAN</a>
        </div>
      </div>
    
    
    </ul>

    


    <div align="text-center">
    <a href="login.php" class="btn btn-primary"> LOGOUT </a>
  </div>
  </div>
</nav> <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
    
       <div class="btn-group">
        <button type="button" class="btn btn-light">PENDAFTARAN</button>
        <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">        
        </button>

        <div class="dropdown-menu">
          <a class="dropdown-item" href="pendaftaran.php">DAFTAR BARU</a>
          <a class="dropdown-item" href="proses_panjang.php">PERPANJANGAN</a>
        </div>
      </div>
    
    
    
    </ul>

    


    <div align="text-center">
    <a href="login.php" class="btn btn-primary"> LOGOUT </a>
  </div>
  </div>
</nav>


  <br>
  
  <h5>&nbsp; ISI DATA KENDARAAN</h5>
<br>
<form action="" method="POST"  class="col-sm-8">
  
    <div class="form-group row">
    <label  class="col-sm-3 col-form-label">No UJI</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nouji" placeholder="NO UJI">
    </div>
  </div>

<div class="form-group row">
    <label  class="col-sm-3 col-form-label">No Buku Uji</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nobukuuji" placeholder="Buku Uji">
    </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-3 col-form-label">No Kendaraan</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nokendaraan" placeholder="No Kendaraan">
    </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-3 col-form-label">No Mesin</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="nomesin" placeholder="No Mesin">
    </div>
  </div>

  <div class="form-group row">
    <label  class="col-sm-3 col-form-label">Jenis Kendaraan</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="jenis" placeholder="Jenis Kendaraan">
    </div>
  </div>

   <div class="form-group row">
    <label  class="col-sm-3 col-form-label">Tanggal Pendaftaran</label>
    <div class="col-sm-5">
      <input type="date" class="form-control" name="jenis" placeholder="Tanggal pemeriksaan">
    </div>
  </div>

  <div class="form-group row" class="navbar dropdown ">
    <label  class="col-sm-3 col-form-label">USER</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="user" placeholder="USER" >
    </div>
  </div>

<div align="text-center">
    <a href="pendaftaran.php" class="btn btn-primary"> Daftar </a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset" name="reset">
  </div>
</form>

<? php
  $kode = @$_POST['nouji'];
  $kode = @$_POST['nobukuuji'];
  $kode = @$_POST['nokendaraan'];
  $kode = @$_POST['nomesin'];
  $kode = @$_POST['nomesin'];
  $kode = @$_POST['jenis'];

  $kode = @$_POST['user'];

?>
 


</body>
</html>


