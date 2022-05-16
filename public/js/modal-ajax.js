


// Peringatan !! Semua modal disini diperuntukan untuk modal ubah

$(function() {

    $('.true').hide();
    $('.false').hide();



    //modal client
    $(document).on('click','.createnew',function(){

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

    $(document).on('click','.tampilmodalubah',function(){

        $('#formmodallabel').html('Change existing Client');
        $('.modal-footer button[type=submit]').html('Change Client')
        
        const id = this.getAttribute('data-id'); // itS FUCKING WORK LETSGOOO
        $('#buatubah').attr('action', 'clients/update/'.concat(id));
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
    $(document).on('click','.createnewp',function(){

        $('#formmodallabel').html('Add New Project');
        $('.modal-footer button[type=submit]').html('Add Project')

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



    $(document).on('click','.tampilmodalubahp',function(){

        $('#formmodallabel').html('Change existing Project');
        $('.modal-footer button[type=submit]').html('Change Project')
      
        const id = this.getAttribute('data-id'); // itS FUCKING WORK LETSGOOO
        $('#buatubah').attr('action', 'projects/update/'.concat(id));
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
                $('#name').val(project.name_project);
                $('#deadline').val(project.deadline);
                $('#status').val(project.status);
                $('#manufacture_date').val(project.manufacture_date);
                $('#price').val(project.price);
                $('#id').val(project.id);

            }

        });
    });
    // modal tasks 
    $('.createnewt').click(function () { 
        $('.modal-title').html('Add Task');
        $('.modal-footer button[type=submit]').html('Add')
        $('.addupdatetasks').attr('action', 'tasks/store');
                $('#id').val(null);
                $('#name').val(null)
                $('#developer_id').val(null)
                $('#description').val(null)
                $('#status').val(null)
                $('#date').val(null)

    });

  

    $(document).on('click','.tampilmodalubaht',function(){
        $('.modal-title').html('Change Task');
        $('.modal-footer button[type=submit]').html('Change')
        id = this.getAttribute('data-id');
        console.log(id);
        $('.addupdatetasks').attr('action', 'tasks/update/'.concat(id));
        $.ajax({
            url: "/tasks/getTasksByid/".concat(id),
            dataType: "json",
            success: function (data) {
                console.log(data);
                $('#id').val(data.id);
                $('#name').val(data.name)
                $('#developer_id').val(data.developer_id)
                $('#description').val(data.description)
                $('#status').val(data.task_status)
                $('#date').val(data.deadline)

           }
        });
        
    });



    //modal developer
    $('.createnewdeveloper').on('click', function() {
        $('#formmodallabel').html('Add New Developer');
        $('.modal-footer button[type=submit]').html('Add')
        $('#name').val(null);
        $('#telephone_number').val(null);
        $('#account_number').val(null);
        $('#address').val(null);
        $('#email').val(null);
        $('#id').val(null);

        $('#buatubahd').attr('action', '/developers/store');


    });

    $(document).on('click','.updatedeveloper',function(){

       $('#formmodallabel').html('Change existing Developer');
       $('.modal-footer button[type=submit]').html('Change Developer');

       const id = this.getAttribute('data-id');
       $('#buatubahd').attr('action', '/developers/update/'.concat(id));
    $.ajax({
        url: '/developers/getDeveloper/'.concat(id),
        datatype: 'json',
        success: function(data) {
           var developer = JSON.parse(data);
           console.log(developer);
           $('#name').val(developer.name_developer);
           $('#address').val(developer.address);
           $('#telephone_number').val(developer.telephone_number);
           $('#account_number').val(developer.account_number);
           $('#email').val(developer.email);
           $('#id').val(developer.id);
            
        }
    });
        
    });

    // modal salary
    $(document).on('click','.createsalary',function(){

        $('.modal-title').html('Add Salary');
        $('.modal-footer button[type=submit]').html('Add ');
        $('#id').val('')
        $('#user_id').val('')
        $('#salary_amount').val('')
        $('#payroll_deducation').val('')
        $('#developer_id').val('')
        $('#payroll_status').val('')
        $('#overtime_money').val('')
        $('#payroll_date').val('')
        $('#total_salary_received').val('')
        // $('#addupdatesalary').attr('action', '/salary/store')
        
    });

    $(document).on('click','.updatesalary',function(){

        $('.modal-title').html('Change existing Data Salary');
        $('.modal-footer button[type=submit]').html('Change Salary');

        const id = this.getAttribute('data-id')
        $('#addupdatesalary').attr('action','/salary/update/'.concat(id));
        $.ajax({
            url: "/salary/getsalaryById/".concat(id),
            dataType: "json",
            success: function (data) {
                console.log(data);
               $('#id').val(data.id)
               $('#user_id').val(data.user_id)
               $('#salary_amount').val(data.salary_amount)
               $('#payroll_deducation').val(data.payroll_deducation)
               $('#developer_id').val(data.developer_id)
               $('#payroll_status').val(data.payroll_status)
               $('#overtime_money').val(data.overtime_money)
               $('#payroll_date').val(data.payroll_date)
               $('#total_salary_received').val(data.total_salary_received)
               
            }
        });

        
    });



    //modal payments
    $(document).on('click','#createpayments',function(){

        $('.modal-title').html('Add Payments');
        $('.modal-footer button[type=submit]').html('Add new Payments');
        const id = $(this).attr('data-id');
        $('#addupdatepay').attr('action', '/payments/store');
        $('#project_id').val(null)
        $('#user_id').val(null)
        $('#amount').val(null)
        $('#status').val(null)
        $('#description').val(null)
        $('#date').val(null)

    });

    $(document).on('click','.updatepay',function(){

    
        console.log('update payments click!'); 
        $('.modal-title').html('Change existing Data Payments');
        $('.modal-footer button[type=submit]').html('Change Payments');   
        const id = $(this).attr('data-id');
        $('#addupdatepay').attr('action', '/payments/update/'.concat(id));
        $.ajax({
            url: "/payments/getdataPayments/".concat(id),
            dataType: "json",
            success: function (data) {
                console.log(data);
                $('#amount').val(data.amount)
                $('#slug_pembayaran').val(data.slug_pembayaran)
                $('#status').val(data.status)
                $('#description').val(data.description) 
                $('#date').val(data.date)
            }
        });
        
    });
    //modal category
    $(document).on('click', "#createnewc",function(){

        console.log('modal buat Category')

        $('#modallabel').html('Add New Category');

        $('#name').val(null);
        $('#id').val(null);
        $('#addupdatecategory').attr('action', 'category/store');
    } );


    $(document).on('click', ".updatecategory",function(){
        console.log('modal ubah Category')
        $('#modallabel').html('Edit Existing category');
        $('.modal-footer button[type=submit]').html('Change Category');
        const id = this.getAttribute('data-id');
        console.log(id);
        $('#addupdatecategory').attr('action', 'category/update/'.concat(id))
        $.ajax({
            url: '/category/getCategory/'.concat(id),
            datatype: 'json',
            success: function(data) {
                console.log(data);
                var category = JSON.parse(data)
                $('#name').val(category.name);
                $('#id').val(category.id);
       
            }
            });
    })

    $(document).on('click', ".delete-category",function(){

        $('.loading').show();

        $('.true').hide();
        $('.false').hide();
        var id = this.getAttribute('dataid');
        console.log(id);
        $.ajax({
            url: '/category/checkproject/'.concat(id),
            success: function(data) {
                var category = JSON.parse(data);
                console.log(data);
                if (category > 0){
                    $('.loading').hide();
                    $('.true').show();
                    $('.false').hide();
                } else {
                    $('.loading').hide();
                    $('.true').hide();
                    $('.false').show();
                }
            }
        });
    })

    //modal platform

    $(document).on('click',"#createnew-p",function(){

    
        $('#labelmodal').html('Add New Platform');

        $('#nama-platform').val(null);
        $('#id-p').val(null);

    } );

    $(document).on('click',".edit-platform",function(){

   
        $('#labelmodal').html('Edit Existing Platform');
        $('.modal-footer button[type=submit]').html('Change Platform');
        var id = this.getAttribute('dataid');
        console.log(id);
        $.ajax({
            url: '/platform/getPlatform/'.concat(id),
            datatype: 'json',
            success: function(data) {
                var platform = JSON.parse(data);
                console.log(platform);
                $('#nama-platform').val(platform.name);
                $('#id-p').val(platform.id);

            }
            });
    })
    
    $(document).on('click',".delete-platform",function(){

        $('.loading').show();

        $('.true').hide();
        $('.false').hide();
        var id = this.getAttribute('dataid');
        console.log(id);
        $.ajax({
            url: '/platform/checkproject/'.concat(id),
            success: function(data) {
                var platform = JSON.parse(data);
                console.log(data);
                if (platform > 0){
                    $('.loading').hide();
                    $('.true').show();
                    $('.false').hide();
                } else {
                    $('.loading').hide();
                    $('.true').hide();
                    $('.false').show();
                }
            }
        });
    })



   
});