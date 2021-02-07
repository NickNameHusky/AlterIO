
const flashData = $('.flash-data').data('flashdata');
if (flashData){
swal.fire({
  position: 'top-end',
  icon: 'success',
  title:'Datanya',
	text:'Berhasil ' + flashData + ' Gais',
  showConfirmButton: false,
  timer: 1500
 
});
}

const gagal = $('.flash-gagal').data('gagal');
if (flashData){
swal.fire({
  position: 'top-end',
  icon: 'warning',
  title:'Datanya',
	text:'Berhasil ' + flashData + ' Gais',
  showConfirmButton: false,
  timer: 1500
 
});
}


$('.tombol-hapus').on('click',function(e){
e.preventDefault();
const href =$(this).attr('href');
swal.fire({
	  title: 'Yakin Gak nih?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Nya Heeh!'
}).then((result) => {
  if (result.value) {
   document.location.href=href;
  }
})
});