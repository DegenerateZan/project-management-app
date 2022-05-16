function deletepay(){
    $('.deletepay').click(function () { 
      var  name = $(this).attr('data-name');
      var id = $(this).attr('data-id');
      var idp  = this.getAttribute('data-idp');
      console.log(idp);
      swal({
        title: "Are you sure?",
        text: "will delete data payments "+ name +"?" ,
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          document.location.href = "payments/delete/".concat(id);
        }
      });  
        
    });
}