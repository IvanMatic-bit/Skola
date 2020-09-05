//Prikazi uloge u formi za kreiranje novog korisnika
// value=UlogaID
// prikazi Naziv uloge
$.ajax({
    url: './script/getUloge.php',
    type: 'GET',
    success: function (data1) {

        $('#uloga').append(data1);
    }
});

//funkcija za pretragu arhive
//šalje ključnu riječ i rezultate upisuje u meni2

function traziArhivu(){
    
    $.ajax({
        url: './script/getArhiva.php',
        type: 'HEAD',
        data: $('#traziArhiva').val(),
       
    }).done(function(podaci){
        $('#menu2').append(podaci);
    });
};

//Za kreiranje korisniskog imena i lozinke u formi za kreiranje novog korisnika
$('document').ready(function () {
    $('#ime').keyup(function () {

        $('#korisnickoIme').val($('#ime').val().toLowerCase() + "." + $('#prezime').val().toLowerCase());
        $('#lozinka').val($('#ime').val().toLowerCase() + "." + $('#prezime').val().toLowerCase());

    });
    $('#prezime').keyup(function () {
        $('#korisnickoIme').val($('#ime').val().toLowerCase() + "." + $('#prezime').val().toLowerCase());
        $('#lozinka').val($('#ime').val().toLowerCase() + "." + $('#prezime').val().toLowerCase());

    });

})


//filtriranje aktivnih zahtjeva
$(document).ready(function () {
    $("#pretragaZahtjeva").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#menu1Sadrzaj .card").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});










