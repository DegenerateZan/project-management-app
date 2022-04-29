     
       function deleteclients()
       {
         $('.deletec').click(function () { 
             var id = this.getAttribute('data-id');
             var name = this.getAttribute('data-name');
             console.log('modal delete c dipencet'.concat(id));

           $.ajax({
               url: "/Projects/getProjectsByidClients/".concat(id),
               dataType: "json",
               success: function (data) {
               var projects = JSON.parse(data)
               console.log(projects);
               if (projects > 0) {
                   swal({
                     title: "Clients!",
                     text: "Warning!, this Clients Data Cannot Be deleted because is being used by a Projects!you can only Edit the Clients of it",
                     icon: "error",
                  });
               } else {
                   swal({
           title: "Are you sure?",
           text: "want to delete clients "+ name +"?" ,
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