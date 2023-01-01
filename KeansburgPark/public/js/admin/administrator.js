let listNav = ['.home','.lock','.cart','.ticket','.news']
function changeColor(className) {
for (let i = 0; i < listNav.length; i++) {
    if (listNav[i] != className) {
        if($(listNav[i]).hasClass('changeColor')) {
            $(listNav[i]).removeClass('changeColor');
        }
    }
}
}
function changeColorClick(className) {
if (!$(className).hasClass('changeColor')) {
    $(className).addClass('changeColor');
} else {
    $(className).removeClass('changeColor');
}
}
$('.home').click(function() {
changeColorClick('.home')
changeColor('.home')
$('.news-nav').css('display','none');
})
$('.lock').click(function(){
changeColorClick('.lock')
changeColor('.lock')
$('.news-nav').css('display','none');
})
$('.cart').click(function() {
changeColorClick('.cart')
changeColor('.cart')
$('.news-nav').css('display','none');
})
$('.ticket').click(function() {
changeColorClick('.ticket')
changeColor('.ticket')
$('.news-nav').css('display','none');
})

$('.news').click(function() {
if (!$('.news').hasClass('changeColor')) {
    $('.news').addClass('changeColor');
    $('.news-nav').css('display','block');
} else {
    $('.news').removeClass('changeColor');
    $('.news-nav').css('display','none');
}
changeColor('.news')
})