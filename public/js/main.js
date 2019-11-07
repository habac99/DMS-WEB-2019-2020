/*----------------------------------------Scroll Up Drop Down--------------------------*/

var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("nav-menu").style.top = "0px";
    } else {
        document.getElementById("nav-menu").style.top = "-60px";
    }
    prevScrollpos = currentScrollPos;
}

/*-------------------------------------CLick Button Drop Down--------------------------*/
document.addEventListener("DOMContentLoaded",function(){

    var button = document.getElementById('tle'),
        drop = document.getElementById('drop-down');
   // console.log(button);
    button.onclick = function(){
        drop.classList.toggle('show');
    }
},false);

// Close drop-down
window.onclick = function (event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("menu-layer2");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

/*-------------------------------------------------cart--------------------------------*/

document.addEventListener("DOMContentLoaded",function(){

    var black = document.querySelector('.black-screen'),
        cart = document.querySelector('.content-cart'),
        button = document.querySelector('.cart');
        overflow = document.querySelector('body');
        close = document.querySelector('.close');

    button.onclick = function(){
        black.classList.add('show');
        cart.classList.add('move-to-left');
        overflow.classList.add('remove-scroll');
    }

    close.onclick = function(){
        black.classList.remove('show');
        cart.classList.remove('move-to-left');
        overflow.classList.remove('remove-scroll');
    }
},false);


/*-------------------------------------------------show--------------------------------*/
function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    expandImg.src = imgs.src;
    expandImg.parentElement.style.display = "block";
}

    var buttonAdd = document.getElementById("buttonAdd");
    var p_name = document.getElementById("testid");
    var p_color=document.getElementById("colorid");
    var p_price=document.getElementById("priceid");

    //console.log(buttonAdd.innerHTML);










