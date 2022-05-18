function deleteproject(){
  $('.deletepro').click(function (e) { 
    var id = this.getAttribute('data-id');
    swal({
      title: "Are you sure?",
      text: " if you delete project ,data all tasks and platforms will be deleted too!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        window.location.href = 'projects/delete/'.concat(id);
      } 
    });
  });
}
