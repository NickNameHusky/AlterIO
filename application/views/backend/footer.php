 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
     
        </div>
      </div>
  </body>
</html>
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->

<script src="<?= base_url();?>adm/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 4 -->
   
<script src="<?= base_url();?>adm/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url();?>adm/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url();?>adm/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url();?>adm/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url();?>adm/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url();?>adm/assets/js/adminlte.min.js"></script>

<script src="<?= base_url();?>adm/assets/js/demo.js"></script>
<script src="<?= base_url();?>adm/js/sweetalert2.all.min.js"></script>
     <script src="<?= base_url();?>adm/js/myscript.js"></script>
     <script src="<?=base_url();?>adm/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
      
      <script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>
     <script>
  $(function () {
    $("#table1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $("#table3").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#table2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
$(document).ready(function() {
$(document).on('click','#detail',function() {
var kode =$(this).data('kode');
var nama =$(this).data('nama');
var kds =$(this).data('alamat');
$('#kode').val(kode);
$('#nama').val(nama);
$('#alamat').val(kds);
      })
})
</script>
<script>
$(document).ready(function() {
$(document).on('click','#select',function() {
var c =$(this).data('a');
$('#kode').val(c);
$('#modal1').modal('hide');
      })
})
</script>
<script>
  $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
    $("#check-all").click(function(){ // Ketika user men-cek checkbox all
      if($(this).is(":checked")) // Jika checkbox all diceklis
        $(".check-item").prop("checked", true); // ceklis semua checkbox siswa dengan class "check-item"
      else // Jika checkbox all tidak diceklis
        $(".check-item").prop("checked", false); // un-ceklis semua checkbox siswa dengan class "check-item"
    });
    
    $("#btn-delete").click(function(){ 
      if (!$(".check-item").is(":checked")){
alert("Anda belum memilih data!");
}else{
      var confirm = window.confirm("Apakah Anda yakin ingin menghapus data-data ini?"); // Buat sebuah alert konfirmasi
      
      if(confirm) // Jika user mengklik tombol "Ok"
        $("#form-delete").submit();
        } // Submit form
    });
  });
  </script>
</script>

</body>
</html>
