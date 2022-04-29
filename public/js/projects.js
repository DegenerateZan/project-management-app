function deleteproject()
{
  $('.deletepro').click(function () { 
      var id = this.getAttribute('data-id');
      var name = this.getAttribute('data-name');
      console.log(id);
     $.ajax({
       url: "/payments/getPaymentsByidproject/".concat(id),
       dataType: "json",
       success: function (data) {
         if (data > 0) {
          swal({
            title: "Projects!",
            text: "Warning!, this Projects Data Cannot Be deleted because is being used by a payments!you can only Edit the projects of it"  ,
            icon: "error",
            })
         } else {
          swal({
            title: "Are you sure?",
            text: "want to projects "+ name +"?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                window.location = 'projects/delete/'.concat(id)
            } 
          });
         }
         
       }
     });
  });
  
  
}