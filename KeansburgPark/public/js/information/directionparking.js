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