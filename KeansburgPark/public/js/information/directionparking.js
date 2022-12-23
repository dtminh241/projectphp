"use strict";
const $  = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

window.onload = function() {
    let timerId= setInterval(() => $('.map').classList.add('animation-left'), 600);
    let timerId1= setInterval(() => $('.infor-address').classList.add('animation-right'), 600);
    // Clear intervals after 6 sec with the timer id 
    setTimeout(() => { 
        clearInterval(timerId);
        clearInterval(timerId1);
        $('.map').classList.remove('animation-left'); 
        $('.map').style.opacity = '1';
        $('.infor-address').classList.remove('animation-right');
        $('.infor-address').style.opacity = '1';
    }, 1000);
}

const addPositionNav = $('.nav').offsetTop;
window.onscroll = function() {
    if (window.pageYOffset >= addPositionNav){
        $('.nav').classList.add("sticky");
        
    } else{
        $('.nav').classList.remove("sticky");
    }
}

function moveTable(x,y,idNav,dauX,cuoiX,dauYNS,cuoiYNS,dauYS,cuoiYS){
    if(x<=dauX){
        $(`.${idNav}`).style.display = 'none';
    }
    if(!$('.nav').classList.contains('sticky')){
        if(y>=dauYNS || y<=cuoiYNS){
            if(x>=cuoiX){
                $(`.${idNav}`).style.display = 'none';
            }
        }
        if(y <= dauYNS) {
            $(`.${idNav}`).style.display = 'none';
        }
    }
    else{
        if(y<=dauYS){
            $(`.${idNav}`).style.display = 'none';
        }
        if(y>=dauYS || y<=cuoiYS){
            if(x>=cuoiX){
                $(`.${idNav}`).style.display = 'none';
            }
        }
    }
}

// function moveout table
function moveTableOut(x,y,idNav,dauX,cuoiX,dauYNS,cuoiYNS,dauYS,cuoiYS){
    if(!$('.nav').classList.contains('sticky')){
        if(x<=dauX || x>=cuoiX || y<dauYNS || y>=cuoiYNS) {
            $(`.${idNav}`).style.display = 'none';
        }
    }
    else{
        if ( x<=dauX || x>=cuoiX || y<=dauYS || y>=cuoiYS) {
            $(`.${idNav}`).style.display = 'none';
        }
    }
}

//nav-rides-attractions
$('.nav-rides-attractions').onmousemove = function() {
    $('.rides-nav').style.display = 'block'
    $('.tickets-nav').style.display = 'none'
    $('.information-nav').style.display = 'none'
    $('.group-nav').style.display = 'none'
}
$('.nav-rides-attractions').onmouseout = function(e) {
    const x = e.clientX;
    const y = e.clientY;
    moveTable(x,y,'rides-nav',400,570,157,200,-4,50)
}
$('.rides-nav').onmouseout = function(e){
    const x = e.clientX;
    const y = e.clientY;
    moveTableOut(x,y,'rides-nav',400,620,198,564,39,404)
}

//nav-tickets
$('.nav-tickets').onmousemove = function() {
    $('.rides-nav').style.display = 'none'
    $('.tickets-nav').style.display = 'block'
    $('.information-nav').style.display = 'none'
    $('.group-nav').style.display = 'none'
}
$('.nav-tickets').onmouseout = function(e) {
    const x = e.clientX;
    const y = e.clientY;
    moveTable(x,y,'tickets-nav',585,671,157,200,-4,50)
}
$('.tickets-nav').onmouseout = function(e){
    const x = e.clientX;
    const y = e.clientY;
    moveTableOut(x,y,'tickets-nav',585,806,198,393,39,234)
}

//nav-information
$('.nav-information').onmousemove = function() {
    $('.rides-nav').style.display = 'none'
    $('.tickets-nav').style.display = 'none'
    $('.group-nav').style.display = 'none'
    $('.information-nav').style.display = 'block'
}
$('.nav-information').onmouseout = function(e) {
    const x = e.clientX;
    const y = e.clientY;
    moveTable(x,y,'information-nav',760,868,157,200,-4,50)
}
$('.information-nav').onmouseout = function(e){
    const x = e.clientX;
    const y = e.clientY;
    moveTableOut(x,y,'information-nav',760,969,198,700,39,550)
}

//nav-group-party
$('.nav-group-party').onmousemove = function() {
    $('.rides-nav').style.display = 'none'
    $('.tickets-nav').style.display = 'none'
    $('.information-nav').style.display = 'none'
    $('.group-nav').style.display = 'block'
}
$('.nav-group-party').onmouseout = function(e) {
    const x = e.clientX;
    const y = e.clientY;
    moveTable(x,y,'group-nav',890,1028,157,200,-4,50)
}
$('.group-nav').onmouseout = function(e){
    const x = e.clientX;
    const y = e.clientY;
    //console.log(y) // x 382 625 y 198 564 39 404
    moveTableOut(x,y,'group-nav',890,1096,198,285,39,127)
}