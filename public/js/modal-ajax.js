


// Peringatan !! Semua modal disini diperuntukan untuk modal ubah

$(function() {

    //modal client
    $('.createnew').on('click', function() {
        $('#formmodallabel').html('Add New Client');
        $('.modal-footer button[type=submit]').html('Add New Client')

        $('#id-client-1').val(null)
        $('#nama-client').val(null);
        $('#tel-number').val(null);
        $('#address').val(null);
        $('#number_account').val(null);
        $('#company-name').val(null);
        $('#email').val(null);

        $('#buatubah').attr('action', '/clients/store');


    });

    $('.tampilmodalubah').on('click', function() {
        $('#formmodallabel').html('Change existing Client');
        


        $('.modal-footer button[type=submit]').html('Change Client')

        const id = this.getAttribute('data-id'); // itS FUCKING WORK LETSGOOO
        console.log(id);
        // console.log(id);
        $.ajax({

            url: '/clients/getclient/'.concat(id),

            datatype: 'json',
            success: function(data) {
                console.log(data);
                var data1 = JSON.parse(data);
                console.log(data);
                console.log(data1.nama_client);
                $('#id-client-1').val(data1.id)
                $('#nama-client').val(data1.name_client);
                $('#tel-number').val(data1.number_phone);
                $('#address').val(data1.addres);
                $('#number_account').val(data1.number_account);
                $('#company-name').val(data1.company_name);
                $('#email').val(data1.email);

            }

        });


    });


    //modal projects



    //modal tasks



    //modal payments


});