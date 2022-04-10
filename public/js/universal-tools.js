$(document).ready(function() {
    $(".option-select").hide();
    $(".isi-row").hide();
    $(".hapus").hide();

    $('[id*=chkLst] input[type="checkbox"]').on('click', function() {
        // Caching all the checkboxes into a variable
        var checkboxes = $('[id*=chkLst] input[type="checkbox"]');
        // If one item is checked.. Uncheck all and
        // check current item..
        if ($(this).is(':checked')) {
            checkboxes.attr('checked', false);
            $(this).attr('checked', 'checked');
        }
    });

    $('.checkall').on('click', function() {
        console.log("SELCTION DIPENCET : OK!");

        $(".selection").prop("checked", true);

    });

    $('.uncheckall').on('click', function() {
        console.log("UNSELCTION DIPENCET : OK!");

        $(".selection").prop("checked", false);

    });







});