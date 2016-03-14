$(document).ready( function() {
    //div inhoud word variabele en gedetached
    var venster1 = $('#E1').detach();
    var venster2 = $('#E2').detach();
    var venster3 = $('#E3').detach();

    // events bij de thumbs : modaal venster openen met de passende inhoud er in
    $('#A1').on('click', function() {
        modaalObj.openen({inhoud: venster1, breedte: 600});
    });
    $('#A2').on('click', function() {
        modaalObj.openen({inhoud: venster2, breedte: 700});
    });
    $('#A3').on('click', function() {
        modaalObj.openen({inhoud: venster3, breedte: 500});
    });

})