function deletesalary(){
    $('.deletesalary').click(function () { 
       var id = $(this).attr('data-id');
       var name = $(this).attr('data-name');
       swal({
        title: "Are you sure?",
        text: "will delete data salary "+ name +"?" ,
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "salary/delete/".concat(id);
        } else {
            window.location = "/salary"
        }
      });        
        
    });
}

   