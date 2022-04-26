function deldev()
{
   $('.deldev').click(function () { 
       var id = $(this).attr('data-id');
       var name = $(this).attr('data-name');
       swal({
title: "Are you sure?",
text: "will delete developer "+ name +"?" ,
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

   }); 
   
}