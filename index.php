<?php
require_once "./php/class/pasien.php";
require_once "./php/class/BMI.php";
require_once "./php/class/BMIpasien.php";
// $pasien1= new pasien(1, 'Alex', 'Jakarta','1999-07-12', 'alex123@gmail.com', 'L' );
$pasien= 
[
  new pasien(1, 'alif', 'Jakarta', '1998-08-19', 'alifmunawar@gmail.com', 'L'),
  new pasien(2, 'Alex', 'Jakarta','1999-07-12', 'alex123@gmail.com', 'L' ),
  new pasien(3, 'Andi', 'Bandung','1995-03-11', 'andiahmad@gmail.com', 'L' ),
] ;
$BMI=
[
  new BMI(65,167),
  new BMI(60,160),
  NEW BMI(70, 170)
] ;
$BMIpasien=
[
  new BMIpasien(1,$BMI[0],'2022-02-17', $pasien[0]),
  new BMIpasien(2,$BMI[1],'2022-02-17', $pasien[1]),
  new BMIpasien(3,$BMI[2],'2022-02-17', $pasien[2]),
] ;

if (isset($_POST))
{
  $pasien[]= new pasien(4, $_POST['nama'], $_POST['tempatlahir'], $_POST['tanggal'], $_POST['email'] , $_POST['radio']);
  $BMI[]= new BMI($_POST['bb'], $_POST['tb']);
  $BMIpasien[]= new BMIpasien(4, $BMI[3], date('Y-m-d'), $pasien[3]);
}

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
              <li class="breadcrumb-item active">Cek kesehatan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Tanggal Periksa</th>
      <th scope="col">Nama</th>
      <th scope="col">Gender</th>
      <th scope="col">Berat</th>
      <th scope="col">Tinggi</th>
      <th scope="col">Nilai</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($BMIpasien as $data){
    ?>
    <tr>
      <th scope="row"> <?= $data->id ?> </th>
      <td><?= $data->tanggal ?></td>
      <td><?= $data->pasien->nama ?></td>
      <td><?= $data->pasien->gender ?></td>
      <td><?= $data->BMI->berat ?></td>
      <td><?= $data->BMI->tinggi ?></td>
      <td><?= $data->BMI->nilai() ?></td>
      <td><?= $data->BMI->Status() ?></td>
      
    </tr>
    <?php
     }
    ?>
  </tbody>
</table>
<a href="./form.php" class="btn btn-secondary">Tambah pasien</a>
    </section>
    <!-- /.content -->
  </div>

<?php
include_once "./php/bottom.php";
?>