var modalObject = (function() {
    var $windows = $(window);
    var $modalWindow = $('<div class="modaal-ven"/>');
    var $modalIn = $('<div class="modaal-in"/>');
    var $closeButton = $('<span class="close-button">&#10005;</span>');

    $modalWindow.append($modalIn);

    return {
        centreren: function() {
            // Asign Center
            var centerLeft = Math.max($windows.width()-$modalIn.outerWidth(), 0) / 2;
            var centerRight = Math.max($windows.height()-$modalIn.outerHeight(), 0) / 2;
            $modalIn.css({left: centerLeft, top: centerRight});
        },
        openen: function(instellingen){
            // Asign Open
            $modalIn.append(instellingen.inhoud, $closeButton);
            $modalIn.css({width: instellingen.breedte+'px' || 'auto',
                    height: instellingen.hoogte+'px' || 'auto'})
                .on('click', function(e){
                    e.stopPropagation();
                });
            $modalWindow.appendTo('body')
                .on('click', modalObject.sluiten);
            modalObject.centreren();
            $closeButton.on('click', modalObject.sluiten);
            $windows.on('resize', modalObject.centreren);
        },
        sluiten: function() {
            // Asign Close
            $modalIn.empty()
                .off('click', modalObject.sluiten);
            $modalWindow.detach();
            $windows.off('resize', modalObject.centreren);


        }


    }


}());