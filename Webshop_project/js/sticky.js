/**
 * Created by J. van der Horst on 14-3-2016.
 */
var scrollValue;
var lastpos = 0;
var navigatie = $('nav');
var menuHight = navigatie.outerHeight();

function moveMenu() {
    scrollValue = $(this).scrollTop();
    if(scrollValue > lastpos) {
        //scroll naar beneden
        console.log('beneden');
        lastpos = scrollValue;
        navigatie.css('top', - menuHight + 'px')

    } else {
        //we scrollen naar beneden
        console.log('haal menu op');
        lastpos = scrollValue;
        navigatie.css('top', 0)
    }
}

$(window).on('scroll', moveMenu);