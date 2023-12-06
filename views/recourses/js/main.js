const listElements = document.querySelectorAll('.list__button--click');

listElements.forEach(listElement => {
    listElement.addEventListener('click', ()=>{
        
        listElement.classList.toggle('arrow');

        let height = 0;
        let menu = listElement.nextElementSibling;
        if(menu.clientHeight == "0"){
            height=menu.scrollHeight;
        }

        menu.style.height = `${height}px`;

    })
});

const $openClose = document.getElementById("open-close"); //boton
const $header = document.getElementById("header"); //elemento afectado

$openClose.addEventListener("click",()=>{
    $header.classList.toggle("small-header") //la case en CSS que sera puesta
});

const mainMenu = document.getElementById('main-menu');
const mainMenuLinks = document.querySelectorAll('main-menu__link');

mainMenu.addEventListener('click', e=>{
if (e.target.classList.contains('main-menu__link')) {
    mainMenuLinks.forEach(item =>{
        item.classList.remove('main-menu__link--active');
    });
    e.target.classList.add('main-menu__link--active');
}
});