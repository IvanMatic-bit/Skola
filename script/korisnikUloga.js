$.ajax({
    url: './script/getZahtjevKorisnikUloga.php',
    type: 'GET',
    success: function (podaci) {

        $('#sadrzajzahtjevi').append(podaci);
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



function test(ZahtjevID, Naslov, Sadrzaj, datumvrijeme, korisnikKreirao, uloga)
{
    datumvrijeme = datumvrijeme.toString();
    
    
    var podaci ={
        zahtjevID : ZahtjevID,
        naslov : Naslov,
        sadrzaj : Sadrzaj,
        datetimePredao: datumvrijeme,
        korisnikPredao: korisnikKreirao,
        uloga: uloga
    }
        
        $.ajax({
            url: './script/zavrsiZahtjev.php',
            type: 'POST',
            data : podaci,
            success: function (res) {
                
               $('#pretragaNav2').append(res);
            }
        });
    
}



