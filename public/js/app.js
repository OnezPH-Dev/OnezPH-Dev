window.addEventListener('scroll', reveal)
function reveal(){
    if(window.scrollY >= 80){
        document.getElementById('navbar').classList.add('navbarActive');
    }else{
        document.getElementById('navbar').classList.remove('navbarActive');
    }
}
