AOS.init();
var bodyHeight = document.querySelector('.mainCon').scrollHeight,
morphi = document.getElementById("morpCon"),
design = document.getElementById("design");

morphi.style.height = bodyHeight + "px";
design.style.height = bodyHeight + "px";

console.log(bodyHeight)

window.addEventListener('scroll', reveal)
function reveal(){
    if(window.scrollY >= 80){
        document.getElementById('navbar').classList.add('navbarActive');
    }else{
        document.getElementById('navbar').classList.remove('navbarActive');
     }
}