<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      
	<div class = "row mt-2">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Ubah Client</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
            <form role="form" method ="post" action="<?= base_url('admin/updateclient');?>" enctype ="multipart/form-data">
           <div class="form-group">
            <label>Nama Client</label>
              <input class="form-control" type="text" name="nama" value="<?= $hasil['namaclient'];?>" required>
            </div>
			<div class="form-group">
           <div class="form-group">
              <input class="form-control" type="hidden" name="kode" value="<?= $hasil['kodeclient'];?>" required>
            </div>
			<div class="form-group">
            <label>Jenis Foto</label>
              <input class="form-control" type="text" name="jenis" value="<?= $hasil['jenis'];?>" required>
            </div>
            <div class="form-group">
            <label>Tanggal Acara</label>
              <input class="form-control" type="date" name="tanggal" value="<?= $hasil['Tanggal'];?>" required>
            </div>
		
			<div class="form-group">
                    <label for="exampleInputFile">Foto Thumbnail</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" value="<?= $hasil['foto'];?>" name="userfile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                </div>
			  <input type="submit" class="btn btn-info" onclick="validate(this)"  value ="Simpan"> </input> 
			  </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        </div>
    </div>
</div>