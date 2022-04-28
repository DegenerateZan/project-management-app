function deletepay(){
    $('.deletepay').click(function () { 
      var  name = $(this).attr('data-name');
      var id = $(this).attr('data-id');
      
      swal({
        title: "Are you sure?",
        text: "will delete data payments "+ name +"?" ,
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "payments/delete/".concat(id);
        }
      });  
        
    });
}