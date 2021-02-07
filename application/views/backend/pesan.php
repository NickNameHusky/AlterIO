
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

		<h2>Daftar Pesan</h2>
		<button  type="button" class="btn btn-warning"><a href="<?=base_url();?>admin/pesandibaca">Lihat Pesan yang telah dibaca</a></button>
	
  
<br>
<br>
<table id="table1" class="table table-bordered table-striped">
  <thead>

    <tr>
      <th scope="col">Nama</th>
      <th scope="col">No WA</th>
      <th scope="col">Tanggal</th>
	  <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
	<?php
		if ($hasil){
			$i = 1;
			foreach ($hasil as $row)	 {
				echo '<tr>';
				echo'<td>'.$row->nama.'</td>';
				echo'<td>'.$row->wa.'</td>';
				echo'<td>'.$row->tanggalacara.'</td>';
    
          echo '<td><a class="btn btn-info" href='.base_url().'admin/updatepesan/'.$row->kodepesan.'><i></i>Tandai Sudah Dibalas</a></div>';
          echo'</tr>';
			}
		}
		?>
  </tbody>
</table>         



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