


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
        
         $('#buatubah').attr('action', 'clients/update');

        $('.modal-footer button[type=submit]').html('Change Client')
        $('#buatubah').attr('action', 'clients/update/');

        const id = this.getAttribute('data-id'); // itS FUCKING WORK LETSGOOO
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
        
        $('#buatubah').attr('action', 'clients/update/'.concat(id));


        
    });


    //modal projects

    $('.createnewp').on('click', function() {
        $('#formmodallabel').html('Add New Client');
        $('.modal-footer button[type=submit]').html('Add New Client')

        $('#client_id').val(null);
        $('#category').val(null);
        $('#name').val(null);
        $('#deadline').val(null);
        $('#status').val(null);
        $('#manufacture_date').val(null);
        $('#price').val(null);
        $('#id').val(null);

        $('#buatubah').attr('action', '/projects/store');


    });




    $('.tampilmodalubahp').on('click', function() {
        $('#formmodallabel').html('Change existing Project');
        $('.modal-footer button[type=submit]').html('Change Project')

        const id = this.getAttribute('data-id'); // itS FUCKING WORK LETSGOOO
        console.log(id);
        // console.log(id);
        $.ajax({

            url: '/projects/getProjectByid/'.concat(id),
            // method : 'GET',
            datatype: 'json',
            success: function(data) {
                console.log(data);
                var project = JSON.parse(data);
                console.log(data);
                console.log(project.name);
                $('#client_id').val(project.client_id)
                $('#category').val(project.category_id);
                $('#name').val(project.name);
                $('#deadline').val(project.deadline);
                $('#status').val(project.status);
                $('#manufacture_date').val(project.manufacture_date);
                $('#price').val(project.price);
                $('#id').val(project.id);

            }

        });



        
    });



    //modal developer
    $('.createnewdeveloper').on('click', function() {
        $('#formmodallabel').html('Add New Client');
        $('.modal-footer button[type=submit]').html('Add New Client')

        $('#name').val(null);
        $('#telephone_number').val(null);
        $('#account_number').val(null);
        $('#address').val(null);
        $('#email').val(null);
        $('#id').val(null);

        $('#buatubah').attr('action', '/projects/store');


    });

    $('.updatedeveloper').click(function () { 
       $('#formmodallabel').html('Change existing Developer');
       $('.modal-footer button[type=submit]').html('Change Developer');

       const id = this.getAttribute('data-id');
       console.log(id);
    $.ajax({
        url: '/developers/getDeveloper/'.concat(id),
        datatype: 'json',
        success: function(data) {
           var developer = JSON.parse(data);
           console.log(developer);
           $('#name').val(developer.name);
           $('#address').val(developer.address);
           $('#telephone_number').val(developer.telephone_number);
           $('#account_number').val(developer.account_number);
           $('#email').val(developer.email);
           $('#id').val(developer.id);
            
        }
    });
        
    });



    //modal payments


});