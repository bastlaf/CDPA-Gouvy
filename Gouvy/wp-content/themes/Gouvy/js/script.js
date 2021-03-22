let search = document.querySelector('.search');
let h1 = document.querySelector('h1');

document.addEventListener('scroll', ()=> {
    
    
    let positionh1 = h1.getBoundingClientRect().top;
    //let scroll = window.pageYOffset; // position du scroll
    
    //console.log(positionh1);
    //console.log(scroll);
    
    if (positionh1 <= 100) {
        search.classList.add("navFixed");
    } else {
        search.classList.remove("navFixed");
    }
});
    let btnMenuResp = document.querySelector('#btnMenuResp');
    let menu = document.querySelector('#menu');
    menu.style.right = '-25rem';
 
    btnMenuResp.addEventListener('click', () => {
        if (menu.style.right === "-25rem") {
            menu.style.right = "0rem";
            btnMenuResp.classList.add('btnMenuResp--active');

        } else {
            menu.style.right = "-25rem";
            btnMenuResp.classList.remove('btnMenuResp--active');
        }
    });

    