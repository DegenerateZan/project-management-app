function deletedfinances(){
  $('.deletedfinances').click(function (e) { 
      var id = this.getAttribute('data-id');
      var description = this.getAttribute('data-description');
      swal({
          text: "Are you Sure Deleted Data Finance " + description + "?",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            window.location = '/finance/delete/'.concat(id)
          }
        });
      
  });
}