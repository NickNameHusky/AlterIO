
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" />
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
    
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      
	<div class = "row mt-2">
		<div class ="col-md-6">
	<div class ="flash-data" data-flashdata="<?= $this->session->flashdata('flash')?>"></div>
	<?php if ($this->session->flashdata('flash')):?>
	<?php endif ;?>
		 <!--	<a href=" "class="btn btn-primary">Tambah Data Perusahaan</a>
		-->
		</div>
	</div>
		<h2>Daftar Paket</h2>
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
                  Tambah Paket
    </button>
  
<br>
<br>
<table id="table1" class="table table-bordered table-striped">
  <thead>

    <tr>
      <th scope="col">Kode Paket</th>
      <th scope="col">Nama Paket</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Harga</th>
	  <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
   
	<?php
		if ($hasil){
			$i = 1;
			foreach ($hasil as $row)	 {
				echo '<tr>';
				echo'<td>'.$row->kodepaket.'</td>';
				echo'<td>'.$row->namapaket.'</td>';
				echo'<td>'.$row->deskripsi.'</td>';
				echo'<td>'.$row->harga.'</td>';
				
				echo '<td><a class="btn btn-primary" href='.base_url().'perusahaan/ubahperusahaan/'.$row->kodedesain.'><i class ="fas fa-pencil-alt"></i></a><a class="btn btn-danger" href='.base_url().'perusahaan/hapus/'.$row->kodedesain.'"><i class="fas fa-trash"></i></a></div>';
				echo'</tr>';
			}
		}
		?>
  </tbody>
</table>         

<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Desain</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form role="form" method ="post" action="<?= base_url('admin/simpanfotodesain');?>" enctype ="multipart/form-data">
			<div class="modal-body">
			
           <div class="form-group">
            <label>Nama Desain</label>
              <input class="form-control" type="text" name="nama" required>
            </div>
			<div class="form-group">
            <label>Harga</label>
              <input class="form-control" type="number" name="harga" required>
            </div>
			<div class="form-group">
            <label>Link Desain</label>
              <input class="form-control" type="text" name="link" required>
            </div>
			<div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="userfile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
               
						<div class="form-group">
              <label>Deskripsi</label>
              <input class="form-control" type="text area" name ="deskripsi" required>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  <input type="submit" class="btn btn-info" onclick="validate(this)"  value ="Simpan"> </input> 
			  </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>


</div>
		</div>
    
<script>
     $(document).ready(function(){
       setInterval(() => {     
   $.ajax({
      type: "POST",
      url:"<?=base_url();?>admin/gettot",
      dataType:'json',
      data:{},
      success: function(data){
       $("#tclient").html(data.totalclient)
      }
     });
    }, 1000);
    })
  </script>