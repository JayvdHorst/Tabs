/**
 * Created by J. van der Horst on 14-3-2016.
 */
var scrollWaarde;
var laatstePositie = 0;
var naviMenu = $('nav');
var menuHoogte = naviMenu.outerHeight();

function verschuifMenu() {
    scrollWaarde = $(this).scrollTop();
    if(scrollWaarde > laatstePositie) {
        //scroll naar beneden
        console.log('we gaan naar benden');
        laatstePositie = scrollWaarde;
        naviMenu.css('top', -menuHoogte + 'px')

    } else {
        //we scrollen naar beneden
        console.log('haal menu');
        laatstePositie = scrollWaarde;
        naviMenu.css('top', 0)
    }
}

$(window).on('scroll', verschuifMenu);