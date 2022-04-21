


$(function() {



    $("#deletedev").click(function(){ 
        var id = $(this).attr('data-id')
        var name = $(this).attr('data-name')
        swal({
            title: "Are you sure?",
            text: "will delete developer "+ name +" data ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              window.location = "developer/delete/"+ id +"",
              swal("Poof! Your imaginary file has been deleted!", {
                icon: "success",
              });
            } else {
              swal("Your imaginary file is safe!");
            }
          });        
    });
    $("#deleteclients").click(function(){ 
        var id = $(this).attr('data-id')
        var name = $(this).attr('data-name')
        swal({
            title: "Are you sure?",
            text: "will delete client "+ name +" data ?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              window.location = "clients/delete/"+ id +""
            } else {
              swal("Your imaginary file is safe!");
            }
          });        
    });

    

    $("#createnew").click(function(){
        console.log('Buat Client Baru Dipencet !')
        $("#buatubah").attr("href")


    
    });
    // condition delete platform
    $('#deleteplatform').click(function(){

        $condition = false;

        if ($condition === true){
            $('.true').show();
            $('.false').hide();

        } else {
            $('.true').hide();
            $('.false').show();
        }


    });

        // condition delete category
        $('#deletecategory').click(function(){

            $condition = false;
    
            if ($condition === true){
                $('.true').show();
                $('.false').hide();
    
            } else {
                $('.true').hide();
                $('.false').show();
            }
    
    
        });
    

    
    prosession = $(document).attr('title');
        console.log(prosession);
        
        namasection = "#".concat(prosession);
        namasectionicon = "#i-".concat(prosession);

        $(namasectionicon).css("color", "black");
        $(namasection).css("font-weight", "bold");

        if (prosession !== "project"){ 

        $("#collapsePagessettings").hide();
         };

    $("#projectsidebar").click(function(){  
        console.log('project Di klik!')
    if (prosession === "project"){
        console.log('JS Prosession OK!')

            console.log('JS terdeteksi sedang di halama projek')

            $(location).prop('href', '#')

    }else {
        console.log('JS terdeteksi tidak di halama projek')
        $(location).prop('href', '/projects')

    };
});

    $("#tombolgaji1").click(function(){
        if(confirm("Yakin ingin mengubah Gaji?")){
            $("#tombolgaji1").attr("href", "#");
        }
        else{
            return false;
        }
    });

    $("#tombolgaji2").click(function(){
        if(confirm("Yakin ingin mengubah Gaji?")){
            $("#tombolgaji2").attr("href", "#");
        }
        else{
            return false;
        }
    });


    $('#orderModal').modal({
        keyboard: true,
        backdrop: "static",
        show: false,

    }).on('show', function() { //subscribe to show method
        var getIdFromRow = $(event.target).closest('tr').data('id'); //get the id from tr
        //make your ajax call populate items or what even you need
        $(this).find('#orderDetails').html($('<b> Order Id selected: ' + getIdFromRow + '</b>'))
    });
});




