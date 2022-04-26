     
       function deleteclients()
       {
         $('.deletec').click(function () { 
             var id = this.getAttribute('data-id');
             var name = this.getAttribute('data-name');
             console.log(id);
           $.ajax({
               url: "/Projects/getProjectsByidClients/".concat(id),
               dataType: "json",
               success: function (data) {
               var projects = JSON.parse(data)
               console.log(projects);
               if (projects > 0) {
                   swal({
                     title: "Clients!",
                     text: "this clients is being used "+ data +" projects ",
                     icon: "error",
                  });
               } else {
                   swal({
           title: "Are you sure?",
           text: "will delete clients "+ name +"?" ,
           icon: "warning",
           buttons: true,
           dangerMode: true,
         })
         .then((willDelete) => {
           if (willDelete) {
             window.location = "clients/delete/".concat(id);
           } else {
               window.location = "/clients"
           }
         });        
   
               }
            
               }
           });
            
         });
         
         
       }