function deleteplatform(){
    $('.delete-platform').click(function () { 
        var id = $(this).attr('data-id');
        var name = $(this).attr('data-name');
        console.log(id);
        swal({
            text: "Are you Sure Deleted Platform " + name + "?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              window.location = '/platform/delete/'.concat(id)
            }
          });
    });
    
}