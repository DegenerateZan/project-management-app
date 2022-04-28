function deletecategory(){
    $('.deletecategory').click(function (e) { 
       var id = this.getAttribute('data-id')
       $.ajax({
           
           url: "projects/getProjectByidcategory/".concat(id),
           dataType: "json",
           success: function (data) {
               if (data > 0) {
                swal({
                    title: "Projects!",
                    text: "Warning!, this Category Data Cannot Be deleted because is being used by a Projects!you can only Edit the Projects of it"  ,
                    icon: "error",
                    })
               } else {
                swal({
                    title: "Are you sure?",
                    text: "want to category "+ name +"?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                  })
                  .then((willDelete) => {
                    if (willDelete) {
                        window.location = 'category/delete/'.concat(id)
                    } 
                  });
               }
               
           }
       });
    });
}