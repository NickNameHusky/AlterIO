
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
    </div>
	</div>
    <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Tambah Foto</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
              <form role="form" method ="post" action="<?= base_url('admin/simpanfoto');?>" enctype ="multipart/form-data">
              <?php $id = $this->uri->segment(3);?>
                <div class="card-body">
              <input class="form-control" type="hidden" name="nama" value=<?=$id;?> readonly>

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
                  </div>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
            
              <!-- /.card-footer -->
            </div>


            
    
            <form method="post" action="<?php echo base_url('admin/hapuscheckbox') ?>" id="form-delete">
		 <table id="table1" class="table table-bordered table-striped"> 
          <thead>

            <tr>
            <th><input type="checkbox" id="check-all"></th>
            <th scope="col">Nama Client</th>
              <th scope="col">Foto</th>
            <th scope="col">Aksi</th>

            </tr>
          </thead>
          <tbody>
          <?php
			if ($hasil){
				$i = 1;
				foreach ($hasil as $row)	 {
          echo "<tr>";
          echo "<td><input type='checkbox' class='check-item' name='kode[]' value='".$row->kodedetail."'></td>";
					echo'<td>'.$row->namaclient.'</td>';
					echo'<td><img src="'.base_url().'gambar/'.$row->fotofoto.'" width="50px" height="50px"></td>';
                echo'<td ><a class="badge badge-danger" href='.base_url().'admin/hapusdetail/'.$row->kodedetail.'>Hapus</a>';
                echo'</tr>';
			}
		}
		?>
    
      
          </tbody>
        </table>
        <button type="button" class="btn btn-info"  id="btn-delete">DELETE BERDASARKAN CHECKBOX</button>
    </form>

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