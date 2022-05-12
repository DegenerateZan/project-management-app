function deleteplatform(){
    $('.delete-platform').click(function () { 
        var id = $(this).attr('data-id');
        var name = $(this).attr('data-name');
        console.log(id);
       $.ajax({
         url: "/getDataProjectPlatformByidPlatforms/".concat(id),
         dataType: "json",
         success: function (data) {
           if (data > 0) {
            swal ( "Oops" ,  "Warning!, this Platfroms Data Cannot Be deleted because is being used by a projects!you can only Edit the projects of it" ,  "error" )
           } else {
            swal({
              text: "Are you Sure Deleted Platform " + name + "?",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                window.location = '/ProjectPlatform/deleted/'.concat(id)
              }
            });
           }
         }
       });
    });
   
}
function deleteplatformp(){
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
            window.location = '/ProjectPlatform/deleted/'.concat(id)
          }
        });
  });
 
}
$(function(){
  $('.createnewpp').click(function () { 
    $('.modal-title').html('add Platform')
    $('.modal-footer button[type=submit]').html('Add')
    $('.addupdateplatfromproject').attr('action' , '/ProjectPlatform/store')
    $('#project_id').val(null)
    $('#platform_id').val(null)

 });
  $('.updateprojectplatform').click(function () { 
    $('.modal-title').html('Change Platform')
    $('.modal-footer button[type=submit]').html('Change ')
    var id = this.getAttribute('data-id');
    console.log(id);
    $('.addupdateplatfromproject').attr('action' , '/ProjectPlatform/update/'.concat(id))
    $.ajax({
      url: "/getDataProjectPlatform/".concat(id),
      dataType: "json",
      success: function (data) {
        console.log(data);
        $('#project_id').val(data.project_id)
        $('#platform_id').val(data.paltform_id)
      }
    });
 });

    $('.createnewm').click(function(){
      $('.modal-title').html('Add Platform')
      $('.modal-footer button[type=submit]').html('Add')
      $('#name').val(null)
    });
    $('.edit-platform').click(function () { 
      var id = this.getAttribute('data-id')
      $('.modal-title').html('Change Platform')
      $('.modal-footer button[type=submit]').html('Change ')
      $('.addupdateplatfromproject').attr('action' , '/platform/update/'.concat(id))
      var id = this.getAttribute('data-id');
      $.ajax({
        url: "/platform/getPlatform/".concat(id),
        dataType: "json",
        success: function (data) {
          $('#name').val(data.name)
        }
      });
      
    });
});