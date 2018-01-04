<?php
  error_reporting(0);
session_start();
if (isset($_SESSION['level']))
{

   if ($_SESSION['level'] == "admin")
   {
      include 'konten-admin.php';
   }
   else if ($_SESSION['level'] == "user")
   {
       include 'konten-user.php';
   }}
else{
    header('location: ../projek-satu/index.php');

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PMI Indramayu</title>
    <link rel="icon" href="images/icon.png" type="image/png" sizes="16x16">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/css_admin.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12" style="height: 100px; background-color: #C62828">
          <img src="images/header.jpg">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
        <div class="item">
                <img src="images/user_banner.jpg" alt="Chicago" style="width:100%;">
           
           </div>
      <div class="row">
        <div class="col-md-12" style="background-color: #D50000; height: 50px; padding: 15px">
        <a href="logout.php">Keluar</a>
        </div>
      </div>
    </div>
 <div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="das_biodata.php">Biodata</a></p>
      <p><a href="galeri.php">Galeri</a></p>
      <p><a href="das_riwayatdonor.php">Riwayat Donor</a></p>
      <p><a href="kartu_donor.php">Cetak Kartu Donor</a></p>
    </div>
    <div class="col-sm-10 text-left"> 
              <h1>Galeri</h1><br><br>        
  <form action="proses/aksi.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="upload" value="Upload">
  </form>
   <table class="table">
      <tr>
        <th>No</th>
        <th>Foto</th>
        <th>Action</th>
      </tr>
      <?php 
        include 'proses/koneksi.php';
        $data=mysqli_query($kon,"SELECT * FROM galeri");
        $no=1;
        while ($r=mysqli_fetch_array($data)) {
          ?>
           <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo '<center><img width="50px" src="images/'.$r['photo'].'"/></center>'?></td>
        <td><a href='proses/hapus_data_photo.php?id=<?php echo $r['id_galeri'];?>'>Hapus</a></td>
       </tr>
          <?php
        }
       ?>
    </table>
</div>
<div class="container-fluid">
<div class="row" style="height: 5px; background-color: #D50000;">
  &nbsp;
</div>
</div>
<footer class="container-fluid text-center">
  <div class="row" style="background-color: #E53935; height: 100px; padding: 15px">
  <div class="col-md-6">
    
      <p style="text-align: left; padding: 0px 150px;">
          Link<br><br>
          <a href="https://www.pmi.or.id"><img src="images/pmi.jpg"></a>
          <a href="https://web.facebook.com/palangmerah?_rdc=1&_rdr"><img src="images/pmi fb.jpg"></a>
    </p>
  </div>
  <div class="col-md-6">
      
      <p style="text-align: left; padding: 0px 125px;">
      Contact Information<br><br>
      Alamat : Jl. Yos Sudarso, Margadadi, Indramayu<br>
      Phone : +62 234 274644
      </p>
  </div>
  </div>
  <div class="row" style="background-color: #263238; height: 50px; padding: 15px">
  <div class="col-md-6" style="padding-right: 200px;">
  </div>
  <div class="col-md-6">
    Copyright&copy;<?php echo date("Y");?> by UDD PMI Indramayu - All rights reserved.
  </div>
  </div>
</footer>

</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>