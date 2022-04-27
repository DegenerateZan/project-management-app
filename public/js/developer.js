function deldev()
{
   $('.deldev').click(function () { 
       var id = $(this).attr('data-id');
       var name = $(this).attr('data-name');
      $.ajax({
         type: "get",
         url: "/developers/getsalaryByidDeveloper/".concat(id),
         dataType: "json",
         success: function (data) {
            // console.log(data);
            if (data > 0) {
                swal({
                     title: "Developers!",
                     text: "this developers is being used "+ data +" data salary",
                     icon: "error",
                     })
            } else {
               swal({
                  title: "Are you sure?",
                  text: "will delete developers "+ name +"?" ,
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                    window.location = "developers/delete/".concat(id);
                  } else {
                     window.location = "/developers"
                  }
                });        
               
            }
         }
      });

   }); 
   
}