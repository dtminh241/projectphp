function show(that){
    if(that.children[1].classList.contains('add')) {
        that.children[1].classList.remove('add')
        that.children[1].style.display = 'none';
    } else {
        that.children[1].classList.add('add')
        that.children[1].style.display = 'block';
        let lengthInfor = $$('.row').length;
        for (let index = 0; index < lengthInfor; index++) {
            if($$('.row')[index] != that) {
                if($$('.row')[index].children[1].classList.contains('add')) {
                    $$('.row')[index].children[1].classList.remove('add')
                    $$('.row')[index].children[1].style.display = 'none'
                }
            }
        }
    }
}

