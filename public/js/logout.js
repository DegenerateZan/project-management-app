function logout(){
    swal({
        title: "Are you sure Logout?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = '/logout'
          
        }
      });
}