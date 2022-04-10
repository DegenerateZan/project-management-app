


$(function() {

    $("#createnew").click(function(){
        console.log('Buat Baru Dipencet !')
    

    
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




