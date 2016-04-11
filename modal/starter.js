$(document).ready( function() {
    //div becomes varibale and gedetached
    var venster1 = $('#E1').detach();
    var venster2 = $('#E2').detach();
    var venster3 = $('#E3').detach();
    var venster4 = $('#E4').detach();
    var venster5 = $('#E5').detach();

    // Opens modal window with basic text
    $('#A1').on('click', function() {
        modalObject.openen({inhoud: venster1, breedte: 600});
    });
    $('#A2').on('click', function() {
        modalObject.openen({inhoud: venster2, breedte: 600});
    });
    $('#A3').on('click', function() {
        modalObject.openen({inhoud: venster3, breedte: 600});
    });
    $('#A4').on('click', function() {
        modalObject.openen({inhoud: venster4, breedte: 600});
    });
    $('#A5').on('click', function() {
        modalObject.openen({inhoud: venster5, breedte: 600});
    });

});