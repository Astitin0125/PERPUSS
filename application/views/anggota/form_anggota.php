<div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><?= $judul;?></h3>
            </div>
            <form method="post" action="<?= base_url()?>anggota/simpan" class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Id_Anggota</label>
                  <div class="col-sm-10">
                    <input type="text" name="id_anggota" value="<?= $id_anggota;?>" class="form-control" readonly>
                  </div>
                </div>

				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" name="nama"  class="form-control" placeholder="Nama" required>
                  </div>
                </div>

				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">NIS</label>
                  <div class="col-sm-10">
                    <input type="text" name="nis" class="form-control" placeholder="Nis">
                  </div>
                </div>

				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" placeholder="Email">
                  </div>
                </div>

				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
                  <div class="col-sm-10">
                   <select name="jenis_kelamin" class="form_control" required>
					<option value=""> - Pilih Jenis Kelamin - </option>
					<option value="Laki-Laki">  Laki-laki  </option>
					<option value="Perempuan">  Perempuan </option>
				   </select>

                  </div>
                </div>

				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
                  <div class="col-sm-10">
                    <textarea name="alamat" class="form-control" cols="30" rows="5"></textarea>
                  </div>
                </div>
                </div>

				<div class="box-footer">
					<a href="<?= base_url()?>anggota" class="btn btn-warning">Cancel</a>
					<button type="submit" class="btn btn-primary">Simpan</button></button>
				</div>
</form>

</div>
</div>


				

