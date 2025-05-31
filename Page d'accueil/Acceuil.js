// menu code js
var menu_toggle = document.querySelector('.menu_toggle');
var menu = document.querySelector('.menu');
var menu_toggle_span = document.querySelector('.menu_toggle span');

menu_toggle.onclick = function(){
    menu_toggle.classList.toggle('active');
    menu_toggle_span.classList.toggle('active');
    menu.classList.toggle('responsive');
}
// end of menu code

// filieres changes
let next = document.querySelector('.next');
let prev = document.querySelector('.prev');

next.addEventListener('click', function(){
    let items = document.querySelectorAll('.item');
    document.querySelector('.slide').appendChild(items[0])
});

prev.addEventListener('click', function(){
    let items = document.querySelectorAll('.item');
    document.querySelector('.slide').prepend(items[items.length = 1])
});

// Emplois du temps 
const dropdowns = document.querySelectorAll('.dropdown');
dropdowns.forEach(dropdown => {
    const select = dropdown.querySelector('.select');
    const caret = dropdown.querySelector('.caret');
    const niveau = dropdown.querySelector('.niveau');
    const options = dropdown.querySelectorAll('.niveau li');
    const selected = dropdown.querySelector('.selected');

    select.addEventListener('click', () => {
        select.classList.toggle('select-clicked');
        caret.classList.toggle('caret-rotate');
        niveau.classList.toggle('niveau-open');
    });

    options.forEach(Option => {
        Option.addEventListener('click', () => {
            selected.innerText = Option.innerText;
            select.classList.remove('select-clicked');
            caret.classList.remove('caret-rotate');
            niveau.classList.remove('niveau-open');
        });
    });
});