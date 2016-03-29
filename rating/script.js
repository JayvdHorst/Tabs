/**
 * Created by PhpStorm.
 * User: Jay v\d Horst
 * Date: 28/04/16
 * Time: 16:08
 */
var geklikt = Math.ceil(1000*Math.random());
var totaaleScoren = geklikt*Math.random()*5;
var voeruitKlik = document.getElementById('amount');
var voeruitRev = document.getElementById('rating');
var stars = document.querySelectorAll('.none');

function fillStarColor(sterNummer, procent)
{
    var naam = 's' + sterNummer;
    procent = Math.min(procent, 100);
    document.getElementById(naam).style.width = procent+ '%';
}


function fillStar(rating){
    for(var i=1; i<6; i++){
        fillStarColor(i, rating*100);
        rating --;

    }
}


function voeruit(){
    voeruitKlik.innerHTML = geklikt;
    voeruitRev.innerHTML = Math.ceil(10*totaaleScoren/geklikt)/10;
    fillStar(Math.ceil(10*totaaleScoren/geklikt)/10);
}


voeruit();


function click(){
    geklikt ++;
    var sternum = this.getAttribute('data-roles');
    totaaleScoren += parseInt(sternum);
    voeruit();
}


for (var i=0; i<stars.length; i++){
    stars[i].addEventListener('click', click)
}