
    
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

		<h2>Daftar Client</h2>
    <button  type="button" class="btn btn-warning"><a href="<?=base_url();?>admin/tambahclient">Tambah Client</a></button>
	
<br>
<br>
<table id="table1" class="table table-bordered table-striped">
  <thead>

    <tr>
      <th scope="col">Kode Client</th>
      <th scope="col">Nama Client</th>
      <th scope="col">Thumbnail</th>
      <th scope="col">Jenis Foto</th>
      <th scope="col">Tanggal Acara</th>
	  <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
	<?php
		if ($hasil){
			$i = 1;
			foreach ($hasil as $row)	 {
				echo '<tr>';
				echo'<td>'.$row->kodeclient.'</td>';
				echo'<td>'.$row->namaclient.'</td>';
				echo'<td><img src="'.base_url().'gambar/'.$row->foto.'" width="50px" height="50px"></td>';
				echo'<td>'.$row->jenis.'</td>';
        echo'<td>'.$row->Tanggal.'</td>';
    
          echo '<td><a class="btn btn-info" href='.base_url().'admin/detail/'.$row->kodeclient.'><i class ="fas fa-eye"></i></a><a class="btn btn-primary" href='.base_url().'admin/ubahclient/'.$row->kodeclient.'><i class ="fas fa-pencil-alt"></i></a> <a class="btn btn-danger" href='.base_url().'admin/hapusclient/'.$row->kodeclient.'"><i class="fas fa-trash"></i></a></div>';
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
              <h4 class="modal-title">Tambah Client</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form role="form" method ="post" action="<?= base_url('admin/simpanclient');?>" enctype ="multipart/form-data">
			<div class="modal-body">
			
           <div class="form-group">
            <label>Nama Client</label>
              <input class="form-control" type="text" name="nama" required>
            </div>
			<div class="form-group">
            <label>Jenis Foto</label>
              <input class="form-control" type="text" name="jenis" required>
            </div>
            <div class="form-group">
            <label>Tanggal Acara</label>
              <input class="form-control" type="date" name="tanggal" required>
            </div>
		
			<div class="form-group">
                    <label for="exampleInputFile">Foto Thumbnail</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="userfile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
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
    
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" />
   
   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
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