


$(function() {


    // delete developer

     

    

    $("#createnew").click(function(){
        console.log('Buat Client Baru Dipencet !')
        $("#buatubah").attr("href")


    
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




