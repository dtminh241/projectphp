window.onload = function() {
    let timerId1= setInterval(() => $('.title-info').classList.add('animation-top-bot'), 300);
    let timerId2= setInterval(() => $('.info-body').classList.add('animation-top-bot'), 600);
    let timerId3= setInterval(() => $('.choose-from-right').classList.add('animation-right-left'), 700);
    setTimeout(() => {  
        clearInterval(timerId1); 
        clearInterval(timerId2); 
        clearInterval(timerId3);
        $('.title-info').classList.remove('animation-top-bot')
        $('.info-body').classList.remove('animation-top-bot')
        $('.choose-from-right').classList.remove('animation-right-left')
        $('.title-info').style.opacity = '1';
        $('.info-body').style.opacity = '1';
        $('.choose-from-right').style.opacity = '1';
    }, 1000);
}