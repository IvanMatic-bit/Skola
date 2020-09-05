$.ajax({
    url: './script/getUlogeZahtjev.php',
    type: 'GET',
    success: function (data1) {

        $('#uloga').append(data1);
    }
});

$.ajax({
    url: './script/getZahtjeviKorisnik.php',
    type: 'GET',
    success: function (podaci) {

        $('#menu1Sadrzaj').append(podaci);
    }
});

$(document).ready(function () {
    $("#pretragaZahtjeva").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#pretragaNav .card").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});