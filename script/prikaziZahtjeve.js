$.ajax({
    url: './script/getZahtjevi.php',
    type: 'GET',
    success: function (podaci) {

        $('#menu1Sadrzaj').append(podaci);
    }
});
