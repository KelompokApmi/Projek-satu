<!DOCTYPE html>
<html>
<head>
	<title>Edit Laporan Anggota</title>
</head>
<body>
	  <div class="modal fade" id="dialog-barang" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Biodata</h4>
            </div>
            <div class="modal-body">
                <form action="proses/proses_edit.php" class="form-horizontal" method="POST" id="form-save">
                <div class="form-group">
                  <input type="hidden" name="id" value='<?php echo"$data[nama]" ?>'>
                  <label class="col-sm-3 control-label">Nama</label>
                    <input name="nama" value='<?php echo"$data[nama]" ?>' type="text" class="col-sm-5 form-control"  style="width: 250px" aria-describedby="emailHelp" placeholder="Masukan Nama">
                  </div>
                  <div class="form-group">
    <label class="col-sm-3 control-label">Tempat Lahir</label>
    <input name="tempat_lahir" type="text" class="col-sm-5 form-control" value='<?php echo"$data[tempat_lahir]" ?>' style="width: 250px" placeholder="Masukan Tempat Lahir">
  </div><hr>
  <div class="form-group">
              <label for="sel1" class="col-sm-3 control-label">Tanggal Lahir</label>
               <input name="tanggal" type="date" class="col-sm-5 form-control" value='<?php echo"$data[tanggal_lahir]" ?>' style="width: 250px">
            </div>
          <div class="form-group">
              <label class="col-sm-3 control-label">Jenis Kelamin</label>
      <input type="radio" name="jenis_kelamin" value="Laki-Laki" checked>Laki-Laki<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
              </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">Alamat</label>
              <input name="alamat" type="text" class="col-sm-5 form-control" value='<?php echo"$data[alamat]" ?>' style="width: 250px"placeholder="Masukan Alamat">
            </div>       
             <div class="form-group">
              <label class="col-sm-3 control-label">Golongan Darah</label>
              <input name="golongan_darah" type="text" class="col-sm-5 form-control" value='<?php echo"$data[golongan_darah]" ?>' style="width: 250px" placeholder="Masukan Golongan Darah Anda">
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label">No Hp</label>
              <input name="telephone" type="text" class="col-sm-5 form-control" value='<?php echo"$data[telephone]" ?>' style="width: 250px" placeholder="Masukan No Hp">
            </div>



                    </div>


                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit">Simpan</button>
                        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Keluar</button>
                    </div>
                </form>
            </div>
        </div>
  </div>
</div>
  </div>
    </div>
  </div>
</div>

</body>
</html>