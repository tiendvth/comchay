//////////////////////////////////////////////////HEADER/////////////////////////////////////////////////////////
// Khi người dùng quận trang thì gọi đến hàm myFunction
window.onscroll = function () {
    myFunction()
};
// Get the header
var header = document.getElementById("myHeader");
// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}

////////////////////////////////////////////////////// FORM DANG NHAP///////////////////////////////////////////
var login = document.getElementById('login');
var regis = document.getElementById('regis');
var dropdow = document.getElementById('dropdownMenuLink');
var dropdowMenu = document.getElementById('dropd-menu');

var LoginForm = document.getElementById("log-form");
var RegForm = document.getElementById("reg-form");
var Indicator = document.getElementById("indicator");
var FormAccount = document.getElementById("form-account");

regis.onclick = function () {
    RegForm.style.transform = "translateX(-500px)";
    LoginForm.style.transform = "translateX(-500px)";
    Indicator.style.transform = "translateX(239px)";//144
    FormAccount.style.height = "710px";//545
    RegForm.style.opacity = "0";
    RegForm.style.opacity = "1";
}

login.onclick = function () {
    RegForm.style.transform = "translateX(0px)";
    LoginForm.style.transform = "translateX(0px)";
    Indicator.style.transform = "translateX(82px)";//38
    FormAccount.style.height = "430px";//345
    LoginForm.style.opacity = "0";
    LoginForm.style.opacity = "1";
}
document.getElementById("dropdownMenuLink").onclick = function() {dropdowUser()};

function dropdowUser() {
    document.getElementById("dropd-menu").classList.toggle("show");
}

