<?php
include_once "./php/top.php";
include_once "./php/navbar.php";
include_once "./php/sidebar.php";
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CEK KESEHATAN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">cek kesehatan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
<form action="./index.php" method="POST">
  <div class="form-group row">
    <label for="numeric" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="numeric" name="nama" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="numeric" class="col-4 col-form-label">Tempat lahir</label> 
    <div class="col-8">
      <input id="numeric" name="tempatlahir" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Years-month-date" class="col-4 col-form-label">Tanggal Periksa</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-book"></i>
          </div>
        </div> 
        <input id="Years-month-date" name="tanggal" placeholder="Years-month-date" type="date" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="numeric" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="numeric" name="email" type="email" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Berat badan</label> 
    <div class="col-8">
      <input id="text" name="bb" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Tinggi badan</label> 
    <div class="col-8">
      <input id="text1" name="tb" type="number" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="L"> 
        <label for="radio_0" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="P"> 
        <label for="radio_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</section>
    <!-- /.content -->
  </div>
<?php
include_once "./php/bottom.php";
?>

