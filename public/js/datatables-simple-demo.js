window.addEventListener('DOMContentLoaded', event => {
    // Simple-DataTables
    // https://github.com/fiduswriter/Simple-DataTables/wiki

    const datatablesSimple = document.getElementById('datatablesSimple');
    if (datatablesSimple) {
        new simpleDatatables.DataTable(datatablesSimple,{
            perPage : 5
        });

    
    }

    const customdatatablesSimple = document.getElementById('custom');
    if (customdatatablesSimple) {
        new simpleDatatables.DataTable(customdatatablesSimple, {
            searchable: false,
            perPage: 4
            

        });
        $('.dataTable-dropdown').hide();
        $('.dataTable-info').hide();
    }

    const custom2datatablesSimple = document.getElementById('custom2');
    if (custom2datatablesSimple) {
        new simpleDatatables.DataTable(custom2datatablesSimple, {
            searchable: false,
            perPage: 4

        });
        $('.dataTable-dropdown').hide();
        $('.dataTable-info').hide();
    }
});