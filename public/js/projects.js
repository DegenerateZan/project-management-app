function deleteproject()
{
  $('.deletepro').click(function () { 
      var id = this.getAttribute('data-id');
      var name = this.getAttribute('data-name');
      console.log(id);
      swal({
    title: "Are you sure?",
    text: "will delete project "+ name +"?" ,
    icon: "warning",
    buttons: true,
    dangerMode: true,
  })
  .then((willDelete) => {
    if (willDelete) {
      window.location = "projects/delete/".concat(id);
    } else {
        window.location = "/projects"
    }
  });        

  });
  
  
}