	<?php
    include 'koneksi.php';
    if($_POST){
     $photo = $_FILES['file']['name'];
      move_uploaded_file($_FILES['file']['tmp_name'], '../images/'.$_FILES['file']['name']);
      mysqli_query($kon,"insert into galeri SET photo='$photo'");
    }{
    ?>
     <script type="text/javascript">
 	alert("Data Berhasil Disimpan");
 	window.location.href='../galeri.php';
 </script>
  <?php
}


 ?>