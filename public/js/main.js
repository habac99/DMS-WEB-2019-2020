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
    if (!event.target.matches('.drop-btn-account')) {
        var dropdowns = document.getElementsByClassName("newest-layer");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show1')) {
                openDropdown.classList.remove('show1');
            }
        }
    }
}

/*------------------------------------------------Account----------------------------------------------*/
document.addEventListener("DOMContentLoaded",function(){

    var button1 = document.getElementById('name-user'),
        drop1 = document.getElementById('drop-down-account');
    // console.log(button);
    button1.onclick = function(){
        drop1.classList.toggle('show1');
    }
},false);

// Close drop-down
// window.onclick = function (event) {
//     if (!event.target.matches('.drop-btn-account')) {
//         var dropdowns = document.getElementsByClassName("name-user-layer2");
//         var i;
//         for (i = 0; i < dropdowns.length; i++) {
//             var openDropdown = dropdowns[i];
//             if (openDropdown.classList.contains('show1')) {
//                 openDropdown.classList.remove('show1');
//             }
//         }
//     }
// }
/*-----------------------------------------------------------------------------------------------*/

/*-------------------------------------------------cart--------------------------------*/

// document.addEventListener("DOMContentLoaded",function(){
//
//     var black = document.querySelector('.black-screen'),
//         cart = document.querySelector('.content-cart'),
//         button = document.querySelector('.cart');
//         overflow = document.querySelector('body');
//         close = document.querySelector('.close');
//
//     button.onclick = function(){
//         black.classList.add('show');
//         cart.classList.add('move-to-left');
//         overflow.classList.add('remove-scroll');
//     }
//
//     close.onclick = function(){
//         black.classList.remove('show');
//         cart.classList.remove('move-to-left');
//         overflow.classList.remove('remove-scroll');
//     }
// },false);
//
//
/*-------------------------------------------------show--------------------------------*/
function myFunction(imgs) {
    var expandImg = document.getElementById("expandedImg");
    expandImg.src = imgs.src;
    expandImg.parentElement.style.display = "block";
}

// var calulate = function () {
//     var arr = document.getElementById('tbody-container').childNodes;
//     var subtotal = 0;
//     console.log(arr[1].childNodes[7].textContent.split(' ')[0]);
//     for (var i = 0; i < arr.length; i++) {
//         if (i % 2 === 1) {
//             subtotal += parseFloat(arr[i].childNodes[7].textContent.split(' ')[0]);
//         }
//     }
//     // Hien thi len UI
//     var subtotal_content = document.getElementsByClassName('sub-number');
//     console.log(subtotal_content);
//
//     subtotal_content[0].textContent = subtotal + " $";
//     console.log(subtotal_content[0].textContent.split(' ')[0]);
//
//     //tong = tong + ship
//     document.getElementsByClassName('total-number')[0].textContent = subtotal + " $";
// }
//
// // check class
// function hasClass(element, className) {
//     return (' ' + element.className + ' ').indexOf(' ' + className + ' ') > -1;
// }
//
// document.getElementById('tbody-container').addEventListener('click', function (event) {
//
//     // Delete
//     if (hasClass(event.target.parentNode, 'delete-btn')) {
//         var el = event.target.parentNode.parentNode;
//         var ell = el.parentNode;
//
//         el.parentNode.removeChild(el);
//     }
//
//
//
//     var current_target = event.target;
//     if (hasClass(current_target, 'inc')) {
//
//         var count = current_target.parentNode.parentNode.childNodes[5].childNodes[3].textContent;
//
//         count++;
//
//         current_target.parentNode.parentNode.childNodes[5].childNodes[3].textContent = count;
//         calulate();
//
//     } else if (hasClass(current_target, 'exp')) {
//         var count = current_target.parentNode.parentNode.childNodes[5].childNodes[3].textContent;
//         if (count > 1) {
//             count--;
//             current_target.parentNode.parentNode.childNodes[5].childNodes[3].textContent = count;
//             calulate()
//         }
//
//     }
//
//
// })
//
//
// calulate();










    //console.log(buttonAdd.innerHTML);

/*---------------------------------------------Click Size-----------------------------------------*/
var button = document.getElementById("buttonAdd");
var clickBtn = document.getElementById('select-size-haha');
// var clicklabel= document.getElementById(btn-size) ;
// Disable the button on initial page load
button.disabled = true;

//add event listener
clickBtn.addEventListener('click', function(event) {
    console.log(event.target.previousElementSibling)
    event.target.previousElementSibling.checked = 'checked';
    button.disabled = !button.disabled;
});

// button.addEventListener('click', function(event) {
//     alert('Enabled!');
// });








